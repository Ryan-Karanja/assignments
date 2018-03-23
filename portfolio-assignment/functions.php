<?php
/**
 * My Portfolio functions and definitions
 * This file defines the functionality required for this theme
 * @version 0.0.1
 * +----------------------------------------------------------------------+
 * add_theme_support()
 * +----------------------------------------------------------------------+
 * add_action()
 * +----------------------------------------------------------------------+
 * wp_enqueue_style()
 * +----------------------------------------------------------------------+
 * wp_enqueue_script()
 * +----------------------------------------------------------------------+
 */

// Add your setup function to the queue of actions
add_action( 'after_setup_theme', '______________________' );
function my_portfolio_setup() {

	// Let WordPress manage the <title>.
	_________________________( 'title-tag' );

	// Allow post thumbnails and featured images.
	_________________________( 'post-thumbnails' );

	// Add HTML5 Support
	_________________________( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}

// Add the script function to the queue of actions
add_action( 'wp_enqueue_scripts', '_________________________' );
function my_portfolio_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style(
		'webfonts',
		'https://fonts.googleapis.com/css?family=Saira+Condensed:400,700',
		// Dependancies
		_________________________________________________________________,
		null );

	// Theme stylesheet
	wp_enqueue_style(
		'my-portfolio',
		get_stylesheet_uri(),
		'0.0.1',
		// Dependancies
		_________________________________________________________________,
		'all' );

	// Theme Custom Styles
	wp_enqueue_style(
		'my-portfolio-stylesheet',
		get_theme_file_uri( '/assets/mystyle.css' ),
		// Dependancies
		_________________________________________________________________,
		'0.0.1',
		'all' );

	// Bootstrap CSS
	wp_enqueue_style(
		'bootstrap-style',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
		// Dependancies
		_________________________________________________________________,
		'4.0.0',
		'all' );

	// Bootstrap JS
	wp_enqueue_script(
		'bootstrap-script',
		'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
		// Dependancies
		_________________________________________________________________,
		'4.0.0',
		true );

	// Popper JS
	wp_enqueue_script(
		'popper',
'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
		// Dependancies
		_________________________________________________________________,
		'1.12.9',
		true );
}

?>
