<?php

/**
 * @author: VLThemes
 * @version: @@version
 */

/**
 * Required plugins
 */
if ( ! function_exists( 'docs_tgm_plugins' ) ) {
	function docs_tgm_plugins() {

		$plugins = array(
			array(
				'name' => esc_html__( 'Kirki', '@@textdomain' ),
				'slug' => 'kirki',
				'required' => true,
			),
			array(
				'name' => esc_html__( 'Ghost Kit', '@@textdomain' ),
				'slug' => 'ghostkit',
				'required' => true,
			),
			array(
				'name' => esc_html__( 'DocsPress', '@@textdomain' ),
				'slug' => 'docspress',
				'required' => true,
			),
			array(
				'name' => esc_html__( 'Contact Form 7', '@@textdomain' ),
				'slug' => 'contact-form-7',
				'required' => false,
			),
			array(
				'name' => esc_html__( 'MailChimp for WordPress', '@@textdomain' ),
				'slug' => 'mailchimp-for-wp',
				'required' => false,
			),
		);

		tgmpa( $plugins );

	}
}
add_action( 'tgmpa_register', 'docs_tgm_plugins' );