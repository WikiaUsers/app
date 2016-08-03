<section class="wds-global-footer__<?= $parentName ?>-section wds-is-<?= $name ?>">
	<?php if ( $model['header']['title'] ) : ?>
		<h3 class="wds-global-footer__section-header"><?= $model['header']['title']['key'] ?></h3>
	<?php endif; ?>

	<?php if ( $model['description'] ) : ?>
		<span class="wds-global-footer__section-description"><?= $model['description']['key'] ?></span>
	<?php endif; ?>

	<ul class="wds-global-footer__links-list">
		<?php foreach ( $model['links'] as $link ) : ?>
		<li class="wds-global-footer__links-list-item">
			<?php if ( $link['type'] === 'link-image' ) : ?>
				<?= $app->renderView('DesignSystemGlobalFooter', 'linkImage', [ 'model' => $link ]); ?>
			<?php elseif ( $link['type'] === 'link-branded' ) : ?>
				<?= $app->renderView('DesignSystemGlobalFooter', 'linkBranded', [ 'model' => $link ]); ?>
			<?php else : ?>
				<?= $app->renderView('DesignSystemGlobalFooter', 'linkText', [ 'model' => $link ]); ?>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
	</ul>
</section>
