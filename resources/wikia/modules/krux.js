/*global Krux, define, window*/
window.Krux || ((Krux = function () {
	Krux.q.push(arguments);
}).q = []);

define('wikia.krux', [
	'ext.wikia.adEngine.adContext',
	'ext.wikia.adEngine.adTracker',
	'wikia.document',
	'wikia.log',
	'wikia.tracker',
	'wikia.trackingOptIn',
	'wikia.window'
], function (adContext, adTracker, doc, log, wikiaTracker, trackingOptIn, win) {
	'use strict';

	var maxNumberOfKruxSegments = 50,
		kruxScriptId = 'krux-control-tag',
		kruxLoaded = false,
		segmentsCountTracked = false,
		logGroup = 'wikia.krux';

	function exportPageParams(adLogicPageParams) {
		var params, value;

		if (Object.keys) {
			params = adLogicPageParams.getPageLevelParams();
			Object.keys(params).forEach(function (key) {
				value = params[key];
				if (value) {
					win['kruxDartParam_' + key] = value.toString();
					log('Added: ' + key + ' with value: ' + value.toString(), log.levels.warning, logGroup);
				} else {
					log('Empty value for ' + key, log.levels.warning, logGroup);
				}
			});
		} else {
			log('Object.keys not defined!', log.levels.warning, logGroup);
		}
	}

	function addConfigScript(confid) {
		var k, s;

		k = document.createElement('script');
		k.type = 'text/javascript';
		k.id = kruxScriptId;
		k.async = true;
		k.src = (location.protocol === 'https:' ? 'https:' : 'http:') + '//cdn.krxd.net/controltag?confid=' + confid;
		s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(k, s);
	}

	function load(confid) {
		require([
			'ext.wikia.adEngine.adContext',
			'ext.wikia.adEngine.adLogicPageParams'
		], function (
			adContext,
			adLogicPageParams
		) {
			trackingOptIn.pushToUserConsentQueue(function(optIn) {
				if (optIn === false) {
					log('User opt-out for Krux', log.levels.info, logGroup);
					return;
				}
				log('User opt-in for Krux', log.levels.info, logGroup);

				var script;
				if (adContext.getContext().targeting.enableKruxTargeting) {
					// Export page level params, so Krux can read them
					exportPageParams(adLogicPageParams);

					script = doc.getElementById(kruxScriptId);
					if (script) {
						script.parentNode.removeChild(script);
					}

					// Add Krux pixel
					addConfigScript(confid);
					kruxLoaded = true;

					// Add GA tracking
					adTracker.track('krux/load');
					wikiaTracker.track({
						category: 'ads-trackers',
						action: 'krux',
						label: 'load',
						value: 0,
						trackingMethod: 'analytics'
					});
				}
			});
		});
	}

	function getParams(n) {
		var oldKeyName = 'kx' + n,
			newKeyName = 'kxwikia_' + n;

		// Some browsers throw an exception when trying to check `window.localStorage` value when LS is disabled
		try {
			if (win.localStorage) {
				return win.localStorage[oldKeyName] || win.localStorage[newKeyName] || '';
			} else {
				return '';
			}
		} catch (e) {
			return '';
		}
	}

	function trackNumberOfSegments(numberOfSegments) {
		if (segmentsCountTracked) {
			return;
		}
		var label = numberOfSegments + '';
		while (label.length < 4) {
			label = '0' + label;
		}

		adTracker.track('krux/segments_count', {}, numberOfSegments, label);
		segmentsCountTracked = true;
	}

	function getSegments() {
		var segments = getParams('segs'),
			segsArray;

		if (segments === '') {
			trackNumberOfSegments(0);
			return [];
		}

		segsArray = segments.split(',');
		trackNumberOfSegments(segsArray.length);
		return segsArray.slice(0, maxNumberOfKruxSegments);
	}

	function getUser() {
		return getParams('user');
	}

	function sendEvent(eventId, data) {
		if (!kruxLoaded) {
			return false;
		}
		Krux('admEvent', eventId, data || {});
		return true;
	}

	// Mercury solution to track number of segments on each page view
	adContext.addCallback(function () {
		segmentsCountTracked = false;
	});

	return {
		load: load,
		getSegments: getSegments,
		getUser: getUser,
		sendEvent: sendEvent
	};
});
