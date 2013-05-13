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

/* 
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */
 
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';
}

/* 
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});
	
	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}
	
});
</script>
 
<?php
}

/**
 * Add meta box for slides.
 *
 * @since 0.1
 */
function slider_create_slide_metaboxes() {
    add_meta_box( 'slider_metabox_url', __( 'Slide Link', 'bootstrap-framework' ), 'slider_metabox_url', 'slides', 'normal', 'default' );
	add_meta_box( 'slider_metabox_text', __( 'Button Text', 'bootstrap-framework' ), 'slider_metabox_text', 'slides', 'normal', 'default' );
}

/**
 * Output the meta box #1.
 *
 * @since 0.1
 */             
function slider_metabox_url() {
	
	global $post;	
             
	/* Retrieve the metadata values if they already exist. */
	$slide_link_url = get_post_meta( $post->ID, 'slide_link_url', true ); ?>
	
	<p>URL: <input type="text" style="width: 90%;" name="slide_link_url" value="<?php echo esc_attr( $slide_link_url ); ?>" /></p>
	<span class="description"><?php echo _e( 'The URL this slide should link to.', 'bootstrap-framework' ); ?></span>
	
<?php }

function slider_metabox_text() {
	
	global $post;	
             
	/* Retrieve the metadata values if they already exist. */
	$slide_link_text = get_post_meta( $post->ID, 'slide_link_text', true ); ?>
	
	<p>URL: <input type="text" style="width: 90%;" name="slide_link_text" value="<?php echo esc_attr( $slide_link_text ); ?>" /></p>
	<span class="description"><?php echo _e( 'The button text this slide should show.', 'bootstrap-framework' ); ?></span>
	
<?php }

/**
 * Save meta box data.
 *
 * @since 0.1
 */
function slider_save_meta( $post_id, $post ) {
	
	if ( isset( $_POST['slide_link_url'] ) ) {
		update_post_meta( $post_id, 'slide_link_url', strip_tags( $_POST['slide_link_url'] ) );
	}	
	if ( isset( $_POST['slide_link_text'] ) ) {
		update_post_meta( $post_id, 'slide_link_text', strip_tags( $_POST['slide_link_text'] ) );
	}	
}
	/* Add meta box for slides. */
	add_action( 'add_meta_boxes', 'slider_create_slide_metaboxes' );
	
	/* Save meta box data. */
	add_action( 'save_post', 'slider_save_meta', 1, 2 );

?>