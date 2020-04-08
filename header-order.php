<?php $f = get_field('header'); ?>
<header class="header header-order">
    <div class="wrapper">
        <div class="header-content">
            <a href="<?= home_url(); ?>" class="header-logo">
                <img data-src="<?= $f['logo']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img">
            </a>
            <div class="header-lang">
                <span class="header-lang__title" id="js-lang-page"><?= pll_current_language(); ?></span>
                <ul class="list-lang js--list-lang">
	                <?php pll_the_languages(); ?>
                </ul>
            </div>
        </div>
        <img data-src="<?= get_template_directory_uri(); ?>/assets/img/main-img.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img header-img">
    </div>
</header>