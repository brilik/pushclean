<?php
define( 'VIEWS_DIR', get_template_directory() . '/template-parts/parts/' );
require_once get_template_directory() . '/inc/Debug.php';
require_once get_template_directory() . '/inc/core/theme-functions.php';
require get_template_directory() . '/inc/translate.php';

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
	wp_register_script( 'jq-mCustomScrollbar', $theme_uri . 'js/components/jquery.mCustomScrollbar.js', [], null, true );
	wp_register_script( 'jq-formstyler', $theme_uri . 'js/components/jquery.formstyler.js', [], null, true );
	wp_register_script( 'jq-validate', $theme_uri . 'js/components/jquery.validate.js', [], null, true );
	wp_register_script( 'custom', $theme_uri . 'js/custom.js', [], null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jq-migrate' );
	wp_enqueue_script( 'jq-maskedinput' );
	if( is_page_template('template-parts/template-order.php') ){
		wp_enqueue_script( 'jq-formstyler' );
		wp_enqueue_script( 'jq-mCustomScrollbar' );
		wp_enqueue_script( 'jq-validate' );
	}
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

add_filter('body_class','my_class_names');
function my_class_names( $classes ) {
	$classes[] = 'language-' . pll_current_language('slug');

	return $classes;
}

// disable deactivate and remove plugins
add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 2 );
function disable_plugin_deactivation( $actions, $plugin_file ) {
	// remove action "Edit"
	unset( $actions['edit'] );

	// remove action "Deactivate"
	$important_plugins = array(
		'advanced-custom-fields-pro/acf.php',
		'polylang/polylang.php',
	);
	if ( in_array( $plugin_file, $important_plugins ) ) {
		unset( $actions['deactivate'] );
		$actions['info'] = '<b class="musthave_js">' . pll__( 'Required for theme' ) . '</b>';
	}

	return $actions;
}

// disable deactivate plugin on frontend
add_filter( 'admin_print_footer_scripts-plugins.php', 'disable_plugin_deactivation_hide_checkbox' );
function disable_plugin_deactivation_hide_checkbox( $actions ){
	?>
	<script>
        jQuery(function($){
            $('.musthave_js').closest('tr').find('input[type="checkbox"]').remove();
        });
	</script>
	<?php
}

// disable update for plugins
add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
function disable_plugin_updates( $value ) {

	$pluginsToDisable = [
		'advanced-custom-fields-pro/acf.php',
	];

	if ( isset($value) && is_object($value) ) {
		foreach ($pluginsToDisable as $plugin) {
			if ( isset( $value->response[$plugin] ) ) {
				unset( $value->response[$plugin] );
			}
		}
	}
	return $value;
}

// change author in footer dashboard
add_filter('admin_footer_text', function ()	{
	echo '<span id="footer-thankyou">'.__('Сделано с любовью').'&nbsp;<a href="https://verstkovo.ru/"><b>Verstkovo</b></a></span>';
});