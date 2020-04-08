<?php $f = get_field('main'); ?>
<!-- BEGIN MAIN -->
<div class="main-block">
	<div class="main-block-content">
		<div class="main-block__img">
			<div class="wrapper">
				<img src="<?= $f['bg']['url']; ?>">
			</div>
		</div>
		<div class="main-block__info">
			<div class="wrapper">
				<div class="main-block__info-content">
					<div>
						<span><?= $f['before_title']; ?></span>
						<h1 style="color:<?= $f['color']; ?>;"><?= $f['title']; ?></h1>
						<p><?= $f['after_title']; ?></p>
					</div>
					<div class="main-block__info-img">
						<img data-src="<?= $f['img_product']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['img_product']['alt']; ?>" class="js-img">
					</div>
				</div>
				<div class="main-block-form"><?= do_shortcode($f['shortcode']); ?></div>
			</div>
		</div>
	</div>
</div>
<!-- MAIN EOF   -->