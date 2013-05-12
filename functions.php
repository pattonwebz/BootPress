<?php
/* enable post-thumbnail support in the theme */
add_theme_support( 'post-thumbnails' ); 
/* register navigation menus */
register_nav_menus( array(
	'head-nav' => 'Header Nav', // This appears in the header
	'primary-nav' => 'Primary Nav' // This appears at the end of the header file.
) );
/* register our custom post type for the carousel */
function register_slider_cpt() {
	
	$labels = array(
		'name'                 => __( 'Slides', 'responsive-slider' ),
		'singular_name'        => __( 'Slide', 'responsive-slider' ),
		'all_items'            => __( 'All Slides', 'responsive-slider' ),
		'add_new'              => __( 'Add New Slide', 'responsive-slider' ),
		'add_new_item'         => __( 'Add New Slide', 'responsive-slider' ),
		'edit_item'            => __( 'Edit Slide', 'responsive-slider' ),
		'new_item'             => __( 'New Slide', 'responsive-slider' ),
		'view_item'            => __( 'View Slide', 'responsive-slider' ),
		'search_items'         => __( 'Search Slides', 'responsive-slider' ),
		'not_found'            => __( 'No Slide found', 'responsive-slider' ),
		'not_found_in_trash'   => __( 'No Slide found in Trash', 'responsive-slider' ), 
		'parent_item_colon'    => ''
	);
	
	$args = array(
		'labels'               => $labels,
		'public'               => true,
		'publicly_queryable'   => true,
		'_builtin'             => false,
		'show_ui'              => true, 
		'query_var'            => true,
		'rewrite'              => array( "slug" => "slides" ),
		'capability_type'      => 'post',
		'hierarchical'         => false,
		'menu_position'        => 20,
		'supports'             => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'taxonomies'           => array(),
		'has_archive'          => true,
		'show_in_nav_menus'    => false
	);
	
	register_post_type( 'slides', $args );
}
	add_action( 'init', 'register_slider_cpt' );
/* enqueue my scripts */
function enqueue_my_scripts() {
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array('jquery'), '1.9.1', true); // we need the jqyery library
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true); // all the bootsrap javascript goodness
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

?>