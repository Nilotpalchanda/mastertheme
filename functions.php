<?php

function master_enqueue_script_style(){

// Call CSS File

wp_enqueue_style('main-css',get_template_directory_uri().'/css/main.css', false, null );
wp_enqueue_style('animate-css',get_template_directory_uri().'/css/animate.css', false, null );
wp_enqueue_style('icomoon-css',get_template_directory_uri().'/css/icomoon.css', false, null );
wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css', false, null );
wp_enqueue_style('magnific-popup-css',get_template_directory_uri().'/css/magnific-popup.css', false, null );
wp_enqueue_style('flexslider-css',get_template_directory_uri().'/css/flexslider.css', false, null );
wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css', false, null );

//Call JS File

wp_enqueue_script('modernizr-js',get_template_directory_uri().'/js/modernizr-2.6.2.min.js', true);
wp_enqueue_script('respond-js',get_template_directory_uri().'/js/respond.min.js', true);

wp_enqueue_script('jquery-js',get_template_directory_uri().'/js/jquery.min.js', true);
wp_enqueue_script('jquery.easing-js',get_template_directory_uri().'/js/jquery.easing.1.3.js', true);
wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js', true);
wp_enqueue_script('jquery.waypoints-js',get_template_directory_uri().'/js/jquery.waypoints.min.js', true);
wp_enqueue_script('jquery.flexslider-min-js',get_template_directory_uri().'/js/jquery.flexslider-min.js', true);
wp_enqueue_script('jquery.magnific-popup-js',get_template_directory_uri().'/js/jquery.magnific-popup.min.js', true);

wp_enqueue_script('magnific-popup-options-js',get_template_directory_uri().'/js/magnific-popup-options.js', true);
wp_enqueue_script('jquery.countTo-js',get_template_directory_uri().'/js/jquery.countTo.js', true);
wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js', true);
}
add_action('wp_enqueue_scripts','master_enqueue_script_style');

// Register Menu

function register_menus(){
  
  register_nav_menus(array(
	  
	  'primary' => __('Primary Menu')
  ));
}
add_action('after_setup_theme','register_menus');

// call widget template
require_once get_template_directory().'/inc/widget/register_widget_area.php';

//hooks 
require_once get_template_directory().'/inc/master-hooks/theme-hooks.php';

// add all supports

function my_custom_init() {

add_theme_support( 'post-thumbnails' );

add_post_type_support( 'team_member', 'thumbnail' );

post_type_supports( 'team_member', 'thumbnail' );

}
add_action('init', 'my_custom_init');


add_action( 'init', 'work_cpt' );

function work_cpt() {

	register_post_type( 'work', array(
	  'labels' => array(
	    'name' => 'Work',
	    'singular_name' => 'Work',
	   ),

	  'description' => 'Works which we will be discussing on this blog.',
	  'public' => true,
	  'menu_position' => 20,
	  'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' )
	));
}




add_action( 'init', 'create_book_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Genres', 'textdomain' ),
		'all_items'         => __( 'All Genres', 'textdomain' ),
		'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Edit Genre', 'textdomain' ),
		'update_item'       => __( 'Update Genre', 'textdomain' ),
		'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
		'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
		'menu_name'         => __( 'Genre', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'work' ), $args );


}

// what we will do cpt

add_action( 'init', 'wwwd_cpt' );

function wwwd_cpt() {

	register_post_type( 'what', array(
	  'labels' => array(
	    'name' => 'what',
	    'singular_name' => 'what',
	   ),

	  'description' => 'what we will do.',
	  'public' => true,
	  'menu_position' => 21,
	  'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' )
	));
}