<?php
function enqueue_my_scripts() {
wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array('jquery'), '1.9.1', true);
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

register_nav_menus( array(
	'head-nav' => 'Header Nav',
	'primary-nav' => 'Primary Nav'
) );

?>