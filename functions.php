<?php
/**
 * Theme functions and definitions.
 *
 * @package dvorak
 * @since 0.1
 */

/**
 * Define the maximum possible content width for this theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/#content-width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}

/**
 * Enqueue stylesheets
 */
function dvorak_enqueue_styles() {

	$parent_style = 'twentynineteen-style';

	wp_enqueue_style(
		$parent_style,
		get_template_directory_uri() . '/style.css',
		'',
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_style(
		'compiled-stylesheet',
		get_stylesheet_directory_uri() . '/css/build/global.css',
		'',
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style, 'compiled-stylesheet' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'dvorak_enqueue_styles' );
