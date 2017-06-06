<?php
/**
 * Local Sitemap Page Hooks
 */
class LocalSitemapPageHooks {

	public static function onArticleFromTitle( &$title, &$article ) {
		if ( LocalSitemapPageHelper::isLocalSitemap( $title ) ) {
			F::app()->wg->SuppressRail = true;
			$article = new LocalSitemapPageArticle( $title );
		}

		return true;
	}
}
