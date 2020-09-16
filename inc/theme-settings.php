<?php
/**
 * Check and setup theme's default settings
 *
 * @package tm_marketing
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'tm_marketing_setup_theme_default_settings' ) ) {
	function tm_marketing_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$tm_marketing_posts_index_style = get_theme_mod( 'tm_marketing_posts_index_style' );
		if ( '' == $tm_marketing_posts_index_style ) {
			set_theme_mod( 'tm_marketing_posts_index_style', 'default' );
		}

		// Sidebar position.
		$tm_marketing_sidebar_position = get_theme_mod( 'tm_marketing_sidebar_position' );
		if ( '' == $tm_marketing_sidebar_position ) {
			set_theme_mod( 'tm_marketing_sidebar_position', 'right' );
		}

		// Container width.
		$tm_marketing_container_type = get_theme_mod( 'tm_marketing_container_type' );
		if ( '' == $tm_marketing_container_type ) {
			set_theme_mod( 'tm_marketing_container_type', 'container' );
		}
	}
}
