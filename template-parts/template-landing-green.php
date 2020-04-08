<?php
/**
 * Template Name: Landing Green
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php the_block('head'); ?>

<body <?php body_class('loaded'); ?>>

<?php wp_body_open(); ?>

<!-- BEGIN BODY -->

<div class="main-wrapper">

    <!-- BEGIN CONTENT -->

    <main class="content">
	    <?php
	    the_block('sections__main-block');
	    the_block('sections__safe');
	    the_block('sections__why');
	    the_block('sections__whats');
	    the_block('sections__offer');
	    ?>
    </main>

    <!-- CONTENT EOF   -->

    <!-- BEGIN HEADER -->

    <?php get_header(); ?>

    <!-- HEADER EOF   -->

    <!-- BEGIN FOOTER -->

    <?php get_footer(); ?>

    <!-- FOOTER EOF   -->

</div>

<div class="icon-load"></div>

<!-- BODY EOF   -->

<?php wp_footer(); ?>
</body>

</html>