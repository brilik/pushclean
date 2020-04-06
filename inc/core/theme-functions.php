<?php
if ( ! function_exists( 'ar_the_view' ) ) {
	function the_block( $view_name, $args = [] ) {
		try {
			if ( $view_name == "" ) {
				throw new Exception( "View name empty." );
			}
			$view_name = str_replace( "__", "/", $view_name );
			$file_name = VIEWS_DIR . $view_name;
			if ( ! file_exists( $file_name . ".php" ) ) {
				echo "TEST: {$file_name}.php<br>\r\n";

				throw new Exception( "The file {$file_name}.php not exists" );
			}
			global $args;
			include "{$file_name}.php";
		} catch ( Exception $e ) {
			echo "Error: " . $e->getMessage();
		}
	}
}
if ( ! function_exists( 'get_theme_version' ) ) {
	function get_theme_verstion() {
		$theme = wp_get_theme();

		return $theme->get( 'Version' ); // gets version written in your style.css
	}
}