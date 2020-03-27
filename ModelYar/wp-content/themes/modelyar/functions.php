<?php
register_nav_menus( array(
			'menu' => esc_html__( 'Primary', 'modelyar' ),
		) );
add_action( 'wp_enqueue_scripts', 'modelyar_style' );
add_action( 'wp_enqueue_scripts', 'modelyar_scripts' );

function modelyar_style() {

	wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/assets/js/slick/slick-theme.css');
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/js/slick/slick.css');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'bootstrap-grid-style', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
	wp_enqueue_style( 'bootstrap-min-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'lightslider-style', get_template_directory_uri() . '/assets/css/lightslider.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function modelyar_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick/slick.js', array(), null, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), null, true );
	wp_enqueue_script( 'lightslider-script', get_template_directory_uri() . '/assets/js/lightslider.js', array(), null, true );
}