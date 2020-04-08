<?php $f = get_field('product'); ?>
<div class="order-block-product">
	<div class="order-block-product__info">
		<div class="order-block-product__img">
			<img data-src="<?= $f['img']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['img']['alt']; ?>" class="js-img">
		</div>
		<div class="order-block-product__text">
			<span><?= $f['name']; ?></span>
			<p><?= $f['desc']; ?></p>
		</div>
	</div>
	<div class="order-block-product__count">
	    <span class="box-counter">
	        <span class="counter__link counter__link_prev">
		        <img data-src="<?= get_template_directory_uri(); ?>/assets/img/minus.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img">
	        </span>
	        <span class="counter__input">
	            <input type="text" value="1">
	        </span>
	        <span class="counter__link counter__link_next">
		        <img data-src="<?= get_template_directory_uri(); ?>/assets/img/plus.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-img">
	        </span>
	    </span>
		<div class="box-counter__text">19.99 x 1</div>
	</div>
	<div class="order-block-product__total">
		<p><?php pll_e('Total Order Price'); ?></p>
		<span class="form-info__price">$19.<sup>99</sup></span>
	</div>
</div>