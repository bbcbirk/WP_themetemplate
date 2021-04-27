<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! function_exists( 'themetemplate_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @return void
	 */
	function themetemplate_setup() {

		register_nav_menus(
			array(
				'primary_logged_in' => esc_html__( 'Primary logged in menu', 'themetemplate' ),
				'primary_logged_out' => esc_html__( 'Primary logged out menu', 'themetemplate' ),
				'footer'  => __( 'Secondary menu', 'themetemplate' ),
			)
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

	}
}
add_action( 'after_setup_theme', 'themetemplate_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
 function themetemplate_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'themetemplate-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'themetemplate-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	// RTL styles.
	wp_style_add_data( 'themetemplate-style', 'rtl', 'replace' );


}
add_action( 'wp_enqueue_scripts', 'themetemplate_scripts' );