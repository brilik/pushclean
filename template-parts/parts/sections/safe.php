<?php $f = get_field('safe'); ?>
<!-- BEGIN SAFE -->
<section class="safe">
	<div class="wrapper">
		<h2><?= $f['title']; ?></h2>
		<div class="safe-content">
			<div class="safe-row">
				<div class="safe-column"></div>
				<div class="safe-column">
					<div class="safe-img">
						<img data-src="<?= $f['product']['image']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['product']['image']['alt']; ?>" class="js-img">
					</div>
					<span class="safe-title"><?= $f['product']['text']; ?></span>
				</div>
				<div class="safe-column">
					<div class="safe-img">
						<img data-src="<?= $f['for_comparison']['image']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['product']['image']['alt']; ?>" class="js-img">
					</div>
					<span class="safe-title"><?= $f['for_comparison']['text']; ?></span>
				</div>
			</div>
            <?php foreach ($f['product_item'] as $item): ?>
			<div class="safe-row">
				<div class="safe-column"><?= $item['text']; ?></div>
				<div class="safe-column"><span class="icon-check"></span></div>
				<div class="safe-column"><span class="icon-close"></span></div>
			</div>
            <?php endforeach; ?>
			<div class="safe-btn-content" style="border-top: 5px solid <?= $f['color']; ?>; background: <?= $f['bg_color']; ?>;">
				<a href="#" class="btn btn-small"><?= $f['btn_title']; ?></a>
			</div>
		</div>
	</div>
    <style>
        .content .safe-row .icon-check:before {
            color: <?= $f['color']; ?> !important;
        }
    </style>
</section>
<!-- SAFE EOF   -->