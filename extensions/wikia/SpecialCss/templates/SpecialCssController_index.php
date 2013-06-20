<form method="post" id="cssEditorForm">
	<div class="css-editor">
		<?= $deletedArticle ?>
		<pre class="css-editor-container" id="cssEditorContainer"><?= htmlspecialchars($cssContent); ?></pre>
	</div>
	<aside class="css-side-bar">
		<div class="css-edit-box">
            <label for="minorEdit"><input id="minorEdit" type="checkbox" name="minorEdit"/><?= wfMessage('special-css-minor-edit-label')->plain(); ?></label>
            <label for="editSummary"><?= wfMessage('special-css-edit-summary')->plain() ?></label>
			<textarea id="editSummary" name="editSummary" placeholder="<?= wfMessage('special-css-summary-placeholder')->plain(); ?>"></textarea>
            <nav class="wikia-menu-button primary">
				<input class="css-publish-button" type="submit" value="<?= wfMessage('special-css-publish-button') ?>"/>
                <span class="drop">
					<img src="<?= $wg->BlankImgUrl ?>" class="chevron">
					</span>
					<ul class="WikiaMenuElement">
						<?php if ( isset( $historyUrl ) ): ?>
							<li>
								<a href="<?= $historyUrl ?>"><?= wfMessage('special-css-history-button')->plain() ?></a>
							</li>
						<?php endif ?>
						<li>
                            <a href="#" id="showChanges"><?= wfMessage('special-css-compare-button')->plain() ?></a>
						</li>
						<?php if ( isset( $deleteUrl ) ): ?>
							<li>
								<a href="<?= $deleteUrl ?>"><?= wfMessage('special-css-delete-button')->plain() ?></a>
							</li>
						<?php endif ?>
						<?php if ( isset( $undeleteUrl ) ): ?>
							<li>
								<a href="<?= $undeleteUrl ?>"><?= wfMessage('special-css-undelete-button')->plain() ?></a>
							</li>
						<?php endif ?>
					</ul>
            </nav>
		</div>

		<?php if( !empty($cssUpdates) ): ?>
			<div class="community-updates widget-box">
				<h2><?= wfMessage('special-css-community-update-headline')->text(); ?></h2>
				<ul class="community-updates-list">
					<?php foreach( $cssUpdates as $cssUpdate ): ?>
						<li class="community-update-item plainlinks">
							<?= $cssUpdate['userAvatar']; ?>
							<h4><a href="<?= $cssUpdate['url']; ?>"><?= $cssUpdate['title']; ?></a></h4>
							<span><?= wfMessage('special-css-community-update-by')->params([$cssUpdate['timestamp'], $cssUpdate['userUrl'], $cssUpdate['userName']])->parse(); ?></span>
							<blockquote><?= $cssUpdate['text']; ?></blockquote>
							<?= wfMessage('special-css-community-read-more')->params([$cssUpdate['url']])->parse(); ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<a href="" title="<?= wfMessage('special-css-community-update-see-all')->text(); ?>" class="see-all-link"><?= wfMessage('special-css-community-update-see-all')->text(); ?></a>
			</div>
			<ul class="education-links">
				<li class="widget-box">
					<h2>
						<a href="http://community.wikia.com/wiki/File:Intro_to_CSS_%26_Your_Wiki_Webinar" title="<?= wfMessage('special-css-education-item-webinars-link-title')->text(); ?>">
							<?= wfMessage('special-css-education-item-webinars-header')->text(); ?>
						</a>
					</h2>
					<p><?= wfMessage('special-css-education-item-webinars-paragraph')->text(); ?></p>
				</li>
				<li class="widget-box">
					<h2>
						<a href="http://community.wikia.com/wiki/Help:CSS" title="<?= wfMessage('special-css-education-item-help-link-title')->text(); ?>">
							<?= wfMessage('special-css-education-item-help-header')->text(); ?>
						</a>
					</h2>
					<p><?= wfMessage('special-css-education-item-help-paragraph')->text(); ?></p>
				</li>
				<li class="widget-box">
					<h2>
						<a href="http://community.wikia.com/wiki/Board:Support_Requests_-_Designing_Your_Wiki" title="<?= wfMessage('special-css-education-item-com-center-link-title')->text(); ?>">
							<?= wfMessage('special-css-education-item-com-center-header')->text(); ?>
						</a>
					</h2>
					<p><?= wfMessage('special-css-education-item-com-center-paragraph')->text(); ?></p>
				</li>
			</ul>
		<?php endif; ?>
	</aside>
	<footer class="css-footer">
	</footer>
</form>
