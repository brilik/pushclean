<?php $f = get_field('why'); ?>
<!-- BEGIN WHY -->
<section class="why">
	<div class="wrapper">
		<h2><?= $f['title']; ?></h2>
		<span class="why-subtitle"><?= $f['sub_title']; ?></span>
		<div class="why-content">
			<div class="why-column">
				<ul>
                    <?php foreach ( $f['left_list'] as $list ): ?>
					    <li><?= $list['text']; ?> <span class="why-column__circle"></span></li>
                    <?php endforeach; ?>
				</ul>
			</div>
			<div class="why-column why-circle">
				<span><?= $f['center_group']['title']; ?></span>
				<span><?= $f['center_group']['sub_title']; ?></span>
				<img data-src="<?= $f['center_group']['img']['url']; ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="<?= $f['center_group']['img']['alt']; ?>" class="js-img">
			</div>
			<div class="why-column">
				<ul>
					<?php foreach ( $f['right_list'] as $list ): ?>
                        <li><?= $list['text']; ?> <span class="why-column__circle"></span></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
    <style>
        .content .why-column__circle { background: <?= $f['color']; ?> !important;}
        .content .why-subtitle { color: <?= $f['color']; ?> !important; }
        .content .why-circle { border: 1px solid <?= $f['color']; ?> !important; }
    </style>
</section>
<!-- WHY EOF   -->