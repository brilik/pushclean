<?php
define( 'VIEWS_DIR', get_template_directory() . '/template-parts/parts/' );
require_once get_template_directory() . '/inc/Debug.php';
require_once get_template_directory() . '/inc/core/theme-functions.php';

add_action( 'wp_head', 'pushclear_enqueue_style' );
function pushclear_enqueue_style() {
	$theme_uri = get_template_directory_uri() . '/assets/';
	wp_register_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'main' );
}

add_action( 'wp_enqueue_scripts', 'pushclear_enqueue_scripts', 100 );
function pushclear_enqueue_scripts() {
	$theme_uri = get_template_directory_uri() . '/assets/';
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', $theme_uri . 'js/jquery-3.0.0.min.js', [], null, true );
	wp_register_script( 'jq-migrate', $theme_uri . 'js/jquery-migrate-1.4.1.min.js', [], null, true );
	wp_register_script( 'jq-maskedinput', $theme_uri . 'js/components/jquery.maskedinput.js', [], null, true );
	wp_register_script( 'jq-validate', $theme_uri . 'js/components/jquery.validate.js', [], null, true );
	wp_register_script( 'custom', $theme_uri . 'js/custom.js', [], null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jq-migrate' );
	wp_enqueue_script( 'jq-maskedinput' );
	wp_enqueue_script( 'jq-validate' );
	wp_enqueue_script( 'custom' );
}

/** Подлючаем svg файлы */
add_filter( 'upload_mimes', 'cc_mime_types' );
function cc_mime_types( $file_types ) {
	$new_filetypes        = [];
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types           = array_merge( $file_types, $new_filetypes );

	return $file_types;
}

function the_footer_links($field){
	if ( ! empty( $field ) ) {

		$res = '';
		foreach ( $field['list'] as $item ) {

			$class = '';
			$sep   = '';

			if ( ! empty( $item['mobile'] ) ) {
				$class = 'mobile-text';
				$sep   = '<span class="mobile-text">|</span>';
			}

			$res .= "<a href=\"{$item['link']['url']}\" class=\"{$class}\" target=\"{$item['link']['target']}\">{$item['link']['title']}</a>";

			if ( next( $field['list'] ) ) {

				if ( empty( $sep ) ) {
					$sep = '<span>|</span>';
				}
				$res .= $sep;
			}
		}

		echo $res;
	}
}

function the_head_title(){
	$res = '';
	$res .= get_bloginfo('title') . ' | ' . get_the_title();

	echo $res;
}