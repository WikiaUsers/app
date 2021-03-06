<?php

abstract class ResourceLoaderAdEngine3Base extends ResourceLoaderModule
{
	const TTL_SCRIPTS = 1800; // time to live for scripts downloaded from external sources
	const TTL_GRACE = 300;    // five minutes -- cache last response additionally for this time if we can't download the scripts anymore
	const CACHE_BUSTER = 3;
	public static $localCache = null;

	/**
	 * Configure scripts that should be loaded into one package
	 * @return array of ResourceLoaderScript
	 */
	protected abstract function getScripts();

	/**
	 * Fallback data when request to external script fails
	 * @return array ["script" => '', "modTitme" => '', "ttl" => '']
	 */
	protected abstract function getFallbackDataWhenRequestFails();

	/**
	 * Fetch content from URL
	 * @param $url
	 * @return bool|MWHttpRequest|string
	 */
	protected function fetchRemoteScript($url)
	{
		return ExternalHttp::get($url);
	}

	protected function getMemcKey()
	{
		return wfSharedMemcKey('adengine', get_class($this) . __FUNCTION__, static::CACHE_BUSTER);
	}

	/**
	 * Local cache key
	 * @return string
	 */
	protected function getLocalCacheKey()
	{
		return get_class($this);
	}

	/**
	 * Read contnents of local script. This should be absolute path.
	 * @param $path
	 * @return string
	 */
	protected function fetchLocalScript($path)
	{
		return file_get_contents($path);
	}

	/**
	 * @param $scriptValue
	 * @return mixed
	 */
	protected function getInlineScript($scriptValue)
	{
		return $scriptValue;
	}

	/**
	 * Merges scripts into one
	 * @param array $scriptItems
	 * @return bool|string
	 */
	protected function generateData($scriptItems)
	{
		$scriptsToMerge = [];
		foreach ($scriptItems as $scriptItem) {
			/* @var ResourceLoaderScript $scriptItem */
			$script = false;

			if ($scriptItem->getType() == ResourceLoaderScript::TYPE_REMOTE) {
				try {
					$script = $this->fetchRemoteScript($scriptItem->getValue());
				} catch (Exception $e) {
					return false;
				}
			} elseif ($scriptItem->getType() == ResourceLoaderScript::TYPE_LOCAL) {
				$script = $this->fetchLocalScript($scriptItem->getValue());
			} elseif ($scriptItem->getType() == ResourceLoaderScript::TYPE_INLINE) {
				$script = $this->getInlineScript($scriptItem->getValue());
			}

			if ($script === false) {
				return false;
			}

			$scriptsToMerge[] = $script;
		}

		return join(PHP_EOL, $scriptsToMerge);
	}

	/**
	 * Current timestamp generated only once per script execution
	 * @return int
	 */
	protected function getCurrentTimestamp()
	{
		static $now;
		if (!$now) {
			$now = time();
		}
		return $now;
	}

	/**
	 * Get data from cache / generate new data if TTL is less than time()
	 * @return array|bool|Object
	 */
	protected function getData()
	{
		global $wgMemc;

		if (!empty(static::$localCache[$this->getLocalCacheKey()])) {
			return static::$localCache[$this->getLocalCacheKey()];
		}

		$now = $this->getCurrentTimestamp();

		$memKey = $this->getMemcKey();
		$cached = $wgMemc->get($memKey);
		if (is_array($cached) && $cached['ttl'] > $now) {
			// Cache hit!
			static::$localCache[$this->getLocalCacheKey()] = $cached;
			return $cached;
		}
		// Cache miss, need to re-download the scripts
		$generated = $this->generateData($this->getScripts());

		if ($generated === false) {
			// HTTP request didn't work

			if (is_array($cached)) {
				// Oh, we still have the thing cached
				// Let's use the script for the next a few minutes

				$cached['ttl'] = $now + static::TTL_GRACE;
				$wgMemc->set($memKey, $cached);
				static::$localCache[$this->getLocalCacheKey()] = $cached;
				return $cached;
			}
			$data = $this->getFallbackDataWhenRequestFails();
			$wgMemc->set($memKey, $data);

			\Wikia\Logger\WikiaLogger::instance()
				->warning(
					'ResourceLoaderAdEngine - failed to fetch new data',
					[
						'class' => get_class($this),
						'memKey' => $memKey,
					]
				);

			static::$localCache[$this->getLocalCacheKey()] = $data;
			return $data;
		}

		$data = [
			'script' => $generated,
			'modTime' => $now,
			'ttl' => $now + static::TTL_SCRIPTS,
		];

		if (md5($data['script']) !== md5($cached['script'])) {
			\Wikia\Logger\WikiaLogger::instance()
				->info(
					'ResourceLoaderAdEngine - scripts updated',
					[
						'class' => get_class($this),
						'memKey' => $memKey,
					]
				);
		} else {
			\Wikia\Logger\WikiaLogger::instance()
				->info(
					'ResourceLoaderAdEngine - scripts downloaded without change to previous version',
					[
						'class' => get_class($this),
						'memKey' => $memKey,
					]
				);
		}

		if ($generated === $cached['script']) {
			$data['modTime'] = $cached['modTime'];
		}

		$wgMemc->set($memKey, $data);

		static::$localCache[$this->getLocalCacheKey()] = $data;
		return $data;
	}

	public function getModifiedTime(ResourceLoaderContext $context)
	{
		return $this->getData()['modTime'];
	}

	public function getTtl()
	{
		return $this->getData()['ttl'];
	}

	public function getScript(ResourceLoaderContext $context)
	{
		$data = $this->getData();
		return $data['script'];
	}

	public function supportsURLLoading()
	{
		return false;
	}
}
