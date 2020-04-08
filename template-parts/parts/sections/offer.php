<?php $f = get_field('offer'); ?>
<!-- BEGIN OFFER -->
<div class="offer">
	<div class="wrapper">
		<div class="offer-content">
			<div class="offer-img">
				<img data-src="<?= $f['product_img']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['product_img']['alt']; ?>" class="js-img">
			</div>
			<div class="offer-info">
				<img data-src="<?= $f['logo_img']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['logo_img']['alt']; ?>" class="js-img">
				<p><?= $f['text']; ?></p>
			</div>
            <div class="main-block-form"><?= do_shortcode($f['shortcode']); ?></div>
		</div>
	</div>
    <style>
        .content .offer-img:after { background: <?= $f['color']; ?> !important; }
    </style>
</div>
<!-- OFFER EOF   -->