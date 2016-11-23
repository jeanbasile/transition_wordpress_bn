<?php


function zpb_action_after_setup_theme() {
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1000, 300 );



		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'post-formats',
			array(
				'image',
				'video',
				'quote',
				'gallery',
			) );
	}
}

add_action( 'after_setup_theme', 'zpb_action_after_setup_theme' );
/*
 * ======================
 * SCRIPTS / STYLES ENQUEUE
 * ======================
 */
function zpb_action_enqueue_scripts() {

	
	wp_enqueue_style(
		'font-awesome',
		get_template_directory_uri() . '/css/font-awesome.min.css',
		null,
		'4.6.3',
		'all'
	);

        wp_enqueue_style(
		'bxslider',
		get_template_directory_uri() . '/jquery.bxslider/jquery.bxslider.css',
		null,
		'4.6.3',
		'all'
	);
        
	wp_enqueue_style(
		'zooparc_actus',
		get_template_directory_uri() . '/css/style_accueil.css',
		null,
		'1.0.0',
		'all'
	);

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery',
		get_template_directory_uri() . '/js/jquery-3.1.1.min.js',
		null,
		'3.1.1',
		true );
	wp_enqueue_script( 'jquery' );
        
        wp_register_script( 'parallax',
		get_template_directory_uri() . '/js/parallax.js',
		'jquery',
		'1.0.0',
		true );
	wp_enqueue_script( 'parallax' );
        
        wp_register_script( 'bxslider',
		get_template_directory_uri() . '/jquery.bxslider/jquery.bxslider.min.js',
		'jquery',
		'1.0.0',
		true );
	wp_enqueue_script( 'bxslider' );

	wp_register_script( 'app',
		get_template_directory_uri() . '/js/script.js',
		'jquery',
		'1.0.1',
		true );
	wp_enqueue_script( 'app' );
        
        
}

add_action( 'wp_enqueue_scripts', 'zpb_action_enqueue_scripts' );

function zpb_action_register_menus() {

	register_nav_menu(
		'main-menu',
		'Menu principal'
	);
        
        register_nav_menu(
		'footer-1',
		'Footer 1'
	);
        
        register_nav_menu(
		'footer-2',
		'Footer 2'
	);
        
        
}

add_action( 'after_setup_theme', 'zpb_action_register_menus' );