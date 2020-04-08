<?php $f = get_field('header'); ?>
<header class="header">
	<div class="header-content">
		<div class="header-logo">
			<img data-src="<?= $f['logo']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img">
		</div>
		<div class="header-lang">
			<span class="header-lang__title"><?= pll_current_language(); ?></span>
			<ul class="list-lang js--list-lang">
				<?php pll_the_languages(); ?>
			</ul>
		</div>
	</div>
</header>