<?php $f = get_field('whats'); ?>
<!-- BEGIN WHATS -->
<section class="whats">
	<div class="wrapper">
		<h2><?= $f['title']; ?></h2>
		<div class="whats-content">
            <div class="whats-img">
                <img data-src="<?= $f['product_img']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['product_img']['alt']; ?>" class="js-img">
            </div>
			<?php if ( ! empty( $f['items'] ) ): ?>
				<?php foreach ( $f['items'] as $items ): ?>
                    <div class="whats-item">
                        <div class="whats-item__img">
                            <img data-src="<?= $items['img']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $items['img']['alt']; ?>" class="js-img">
                        </div>
                        <div class="whats-item__info">
                            <span><?= $items['title']; ?></span>
                            <p><?= $items['desc']; ?></p>
	                        <?php
	                        if ( ! empty( $items['link'] ) ) {
		                        echo "<a href=\"{$items['link']['url']}\" class=\"btn btn-small\" target=\"{$items['link']['target']}\">{$items['link']['title']}</a>";
	                        }
	                        ?>
                        </div>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>
        </div>
	</div>
    <style>
        .content .whats-img:before,
        .content .whats-img:after,
        .content .whats-item:before { background: <?= $f['color']; ?> !important; }
        .content .whats-item:nth-child(3):after { border: 1px solid <?= $f['color']; ?> !important; border-left: none !important; }
        .content .whats-item:last-of-type:after { border: 1px solid <?= $f['color']; ?> !important; border-right: none !important; }
    </style>
</section>
<!-- WHATS EOF   -->