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


function register_my_post_type() {
	$labels_01 = array(
		'name'               => 'Programmes Conservation',
		'singular_name'      => 'Programme',
		'menu_name'          => 'Programmes Conservation',
		'name_admin_bar'     => 'Programmes',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Nouveau programme',
		'new_item'           => 'Nouveau programme',
		'edit_item'          => 'Nouveau programme',
		'view_item'          => 'Voir un programme',
		'all_items'          => 'Tous les programmes',
		'search_items'       => 'Chercher un programme',
		'parent_item_colon'  => 'Programme parent',
		'not_found'          => 'Aucun programme trouver',
		'not_found_in_trash' => 'Aucun programme dans la corbeille'
	);

	$args_01 = array(
		'labels'             => $labels_01,
                'description'        => "Programmes de conservation de Beauval Nature",
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'menu_icon'          => get_bloginfo('template_directory').'/images/pictogrammes/conservation.svg',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'programme' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 27,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'programme', $args_01 );


        $labels_02 = array(
		'name'               => 'Partenaires',
		'singular_name'      => 'Partenaire',
		'menu_name'          => 'Partenaires',
		'name_admin_bar'     => 'Partenaire',
		'add_new'            => 'Nouveau',
		'add_new_item'       => 'Nouvelle section partenaire',
		'new_item'           => 'Nouvelle section',
		'edit_item'          => 'Editer une section partenaire',
		'view_item'          => 'Voir une section partenaire',
		'all_items'          => 'Toutes les sections partenaires',
		'search_items'       => 'Chercher une section partenaire',
		'parent_item_colon'  => 'Partenaire parent',
		'not_found'          => 'Aucune section partenaire trouver',
		'not_found_in_trash' => 'Aucune section partenaire dans la corbeille'
	);

	$args_02 = array(
		'labels'             => $labels_02,
                'description'        => "Les partenaires de Beauval Nature",
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'menu_icon'          => get_bloginfo('template_directory').'/images/pictogrammes/partenaire.svg',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'partenaire' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 25,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'partenaire', $args_02 );



        $labels_03 = array(
		'name'               => 'Contenu Accueil',
		'singular_name'      => 'Contenu Accueil',
		'menu_name'          => 'Contenu Accueil',
		'name_admin_bar'     => 'Accueil',
		'add_new'            => 'Nouveau',
		'add_new_item'       => 'Nouvel article de la page d\'accueil',
		'new_item'           => 'Nouvel article de la page d\'accueil',
		'edit_item'          => 'Editer un article de la page d\'accueil',
		'view_item'          => 'Voir un article de la page d\'accueil',
		'all_items'          => 'Tous les articles de la page d\'acceuil',
		'search_items'       => 'Chercher un article',
		'parent_item_colon'  => 'Programme parent',
		'not_found'          => 'Aucun article trouver',
		'not_found_in_trash' => 'Aucun article trouver dans la corbeille'
	);

	$args_03 = array(
		'labels'             => $labels_03,
    'description'        => "Les articles qui figurent en page d'acceuil",
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => get_bloginfo('template_directory').'/images/pictogrammes/logo_asso.svg',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'articlespagedaccueil' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 29,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'articlespagedaccueil', $args_03 );


        $labels_04 = array(
		'name'               => 'Anciens programmes',
		'singular_name'      => 'Ancien Programme',
		'menu_name'          => 'Anciens programmes',
		'name_admin_bar'     => 'Ancien_programmes',
		'add_new'            => 'Nouveau',
		'add_new_item'       => 'Ajouter un programme',
		'new_item'           => 'Ajouter un programme',
		'edit_item'          => 'Editer un programme',
		'view_item'          => 'Voir un programme',
		'all_items'          => 'Tous les anciens programmes',
		'search_items'       => 'Chercher un ancien programme',
		'parent_item_colon'  => 'Programme parent',
		'not_found'          => 'Aucun programme trouver',
		'not_found_in_trash' => 'Aucun programme trouver dans la corbeille'
	);

	$args_04 = array(
		'labels'             => $labels_04,
    'description'        => "Les anciens programmes de conservation Beauval Nature",
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'menu_icon'          => get_bloginfo('template_directory').'/images/pictogrammes/conservation.svg',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'anciens_programmes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 26,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'anciens_programmes', $args_04 );


	$labels_05 = array(
	'name'               => 'EAZA',
	'singular_name'      => 'EAZA',
	'menu_name'          => 'EAZA',
	'name_admin_bar'     => 'EAZA',
	'add_new'            => 'Nouveau',
	'add_new_item'       => 'Ajouter un programme EAZA',
	'new_item'           => 'Ajouter un programme EAZA',
	'edit_item'          => 'Editer un programme EAZA',
	'view_item'          => 'Voir un programme EAZA',
	'all_items'          => 'Tous les anciens programmes EAZA',
	'search_items'       => 'Chercher un ancien programme EAZA',
	'parent_item_colon'  => 'Programme parent',
	'not_found'          => 'Aucun programme EAZA trouver',
	'not_found_in_trash' => 'Aucun programme EAZA trouver dans la corbeille'
	);

	$args_05 = array(
	'labels'             => $labels_05,
	'description'        => "Les Programmes EAZA",
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'menu_icon'          => get_bloginfo('template_directory').'/images/pictogrammes/logo_eaza.png',
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'eaza' ),
	'capability_type'    => 'post',
	'has_archive'        => false,
	'hierarchical'       => false,
	'menu_position'      => 28,
	'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'eaza', $args_05 );


}

add_action( 'init', 'register_my_post_type' );
