<? if(!$fromAjax){
?><div id="mw-pages">
	<h2><?= wfMsg( 'category-exhibition-page-header', $category ) ?></h2>
	<div class="category-gallery">
		<div class="category-gallery-holder">
			<div class="category-gallery-room1" /><? } ?>
			<? foreach($data as $row){ ?>
				<div class="category-gallery-item ">
					<a href="<?=$row['url'] ?>" title="<?=$row['title'] ?>">
						<div class="category-gallery-item-image">
							<?php if (!empty($row['img'])) {?>
								<img src="<?=$row['img'] ?>" alt="<?=$row['title'] ?>" />
							<?php } else { ?>
								<div class="snippet">
									<span class="quote">&#x201C;</span>
									<span class="text"><?=$row['snippet']; ?></span>
								</div>
							<?php } ?>

						</div>
						<details><?=$row['title'] ?></details>
					</a>
				</div>
			<? } ?>
			<? if(!$fromAjax){ ?>
			</div>
			<div class="category-gallery-room2" /></div>
		</div>
	</div>
	<div class="category-gallery-paginator"><?=$paginator; ?></div>
</div> <? } ?>