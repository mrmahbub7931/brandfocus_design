<?php
/**
 * Custom hooks.
 *
 * @package tm_marketing
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'tm_marketing_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function tm_marketing_site_info() {
		do_action( 'tm_marketing_site_info' );
	}
}

if ( ! function_exists( 'tm_marketing_add_site_info' ) ) {
	add_action( 'tm_marketing_site_info', 'tm_marketing_add_site_info' );

	/**
	 * Add site info content.
	 */
	function tm_marketing_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://techmix.xyz/', 'tm_marketing' ) ),
			sprintf(
				/* translators:*/
				esc_html__( 'Proudly powered by %s', 'tm_marketing' ),
				'Techmix'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Theme name: %1$s by %2$s.', 'tm_marketing' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://techmix.xyz/', 'tm_marketing' ) ) . '">techmix.xyz</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Version: %1$s', 'tm_marketing' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'tm_marketing_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
