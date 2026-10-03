<?php
/**
 * MornRain Terminal functions and definitions.
 *
 * @package MornRain_Terminal
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined( 'MORNRAIN_TERMINAL_VERSION' ) ) {
	define( 'MORNRAIN_TERMINAL_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mornrain_terminalsetup' ) ) :
	/**
	 * Register theme defaults and WordPress feature support.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_terminalsetup() {
		load_theme_textdomain( 'mornrain-terminal', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 64,
				'width'       => 240,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'mornrain-terminal' ),
				'footer'  => __( 'Footer Menu', 'mornrain-terminal' ),
			)
		);

		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/main.css' );
	}
endif;
add_action( 'after_setup_theme', 'mornrain_terminalsetup' );

if ( ! function_exists( 'mornrain_terminalscripts' ) ) :
	/**
	 * Enqueue front-end styles and scripts.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_terminalscripts() {
		wp_enqueue_style(
			'mornrain-terminal',
			get_stylesheet_uri(),
			array(),
			MORNRAIN_TERMINAL_VERSION
		);

		wp_enqueue_style(
			'mornrain-terminal-main',
			get_template_directory_uri() . '/assets/css/main.css',
			array( 'mornrain-terminal' ),
			MORNRAIN_TERMINAL_VERSION
		);

		wp_enqueue_script(
			'mornrain-terminal-main',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			MORNRAIN_TERMINAL_VERSION,
			true
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'mornrain_terminalscripts' );

if ( ! function_exists( 'mornrain_terminalexcerpt_length' ) ) :
	/**
	 * Filter the excerpt length.
	 *
	 * @since 1.0.0
	 * @param int $length Default excerpt length in words.
	 * @return int
	 */
	function mornrain_terminalexcerpt_length( $length ) {
		return 24;
	}
endif;
add_filter( 'excerpt_length', 'mornrain_terminalexcerpt_length' );

if ( ! function_exists( 'mornrain_terminalexcerpt_more' ) ) :
	/**
	 * Filter the excerpt "read more" suffix.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	function mornrain_terminalexcerpt_more() {
		return '&hellip;';
	}
endif;
add_filter( 'excerpt_more', 'mornrain_terminalexcerpt_more' );

if ( ! function_exists( 'mornrain_terminalpingback_header' ) ) :
	/**
	 * Add the pingback link to the document head when needed.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function mornrain_terminalpingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}
endif;
add_action( 'wp_head', 'mornrain_terminalpingback_header' );
