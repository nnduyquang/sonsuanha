<?php
/**
 * Created by PhpStorm.
 * User: phuongth
 * Date: 6/10/15
 * Time: 11:47 AM
 */


/*================================================
BOTTOM BAR
================================================== */
if ( !function_exists( 'g5plus_bottom_bar_filter' ) ) {
	function g5plus_bottom_bar_filter() {
		g5plus_get_template( 'bottom-bar' );
	}

	add_action( 'g5plus_main_wrapper_footer', 'g5plus_bottom_bar_filter', 20 );
}

if ( !function_exists( 'g5plus_footer_widgets' ) ) {
	function g5plus_footer_widgets() {
		g5plus_get_template( 'footer-template' );
	}

	add_action( 'g5plus_main_wrapper_footer', 'g5plus_footer_widgets', 10 );
}

if ( !function_exists( 'g5plus_back_to_top' ) ) {
	function g5plus_back_to_top() {
		$g5plus_options = g5plus_option();
		$back_to_top = $g5plus_options['back_to_top'];
		if ( $back_to_top == 1 ) {
			g5plus_get_template( 'back-to-top' );
		}
	}

	add_action( 'g5plus_after_page_wrapper', 'g5plus_back_to_top', 5 );
}