<?php

/**
 * Adds Custom Post Type Alert Banner
 *
 * @since IVY 2016 1.0
 */
add_action('init', 'alert_banner_register');
 
function alert_banner_register() {
	$labels = array(
		'name' => _x('Alert Banner', 'post type general name'),
		'singular_name' => _x('Alert Banner', 'post type singular name'),
		'add_new' => _x('Add New', 'Alert Banner item'),
		'add_new_item' => __('Add New Alert Banner'),
		'edit_item' => __('Edit Alert Banner'),
		'new_item' => __('New Alert Banner'),
		'all_items' => __('All Alert Banners'),
		'view_item' => __('View Alert Banner'),
		'search_items' => __('Search Alert Banner'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title'),
		'has_archive' => false
	  );  
	register_post_type( 'alert_banner' , $args );
}
?>