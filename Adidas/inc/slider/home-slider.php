<?php

// Register Custom Post Type Home Slider Post
function create_homesliderpost_cpt() {

	$labels = array(
		'name' => _x( 'Home Slider Post', 'Post Type General Name', 'adidas' ),
		'singular_name' => _x( 'Home Slider Post', 'Post Type Singular Name', 'adidas' ),
		'menu_name' => _x( 'Home Slider Post', 'Admin Menu text', 'adidas' ),
		'name_admin_bar' => _x( 'Home Slider Post', 'Add New on Toolbar', 'adidas' ),
		'archives' => __( 'Home Slider Post Archives', 'adidas' ),
		'attributes' => __( 'Home Slider Post Attributes', 'adidas' ),
		'parent_item_colon' => __( 'Parent Home Slider Post:', 'adidas' ),
		'all_items' => __( 'All Home Slider Post', 'adidas' ),
		'add_new_item' => __( 'Add New Home Slider Post', 'adidas' ),
		'add_new' => __( 'Add New', 'adidas' ),
		'new_item' => __( 'New Home Slider Post', 'adidas' ),
		'edit_item' => __( 'Edit Home Slider Post', 'adidas' ),
		'update_item' => __( 'Update Home Slider Post', 'adidas' ),
		'view_item' => __( 'View Home Slider Post', 'adidas' ),
		'view_items' => __( 'View Home Slider Post', 'adidas' ),
		'search_items' => __( 'Search Home Slider Post', 'adidas' ),
		'not_found' => __( 'Not found', 'adidas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'adidas' ),
		'featured_image' => __( 'Featured Image', 'adidas' ),
		'set_featured_image' => __( 'Set featured image', 'adidas' ),
		'remove_featured_image' => __( 'Remove featured image', 'adidas' ),
		'use_featured_image' => __( 'Use as featured image', 'adidas' ),
		'insert_into_item' => __( 'Insert into Home Slider Post', 'adidas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Home Slider Post', 'adidas' ),
		'items_list' => __( 'Home Slider Post list', 'adidas' ),
		'items_list_navigation' => __( 'Home Slider Post list navigation', 'adidas' ),
		'filter_items_list' => __( 'Filter Home Slider Post list', 'adidas' ),
	);
	$args = array(
		'label' => __( 'Home Slider Post', 'adidas' ),
		'description' => __( 'small slider  in home page', 'adidas' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-image-flip-horizontal',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 7,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'homesliderpost', $args );

}
add_action( 'init', 'create_homesliderpost_cpt', 0 );
?>