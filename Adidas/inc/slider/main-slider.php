<?php
// Register Custom Post Type Main Slider
function create_mainslider_cpt() {

	$labels = array(
		'name' => _x( 'Main Slider', 'Post Type General Name', 'adidas' ),
		'singular_name' => _x( 'Main Slider', 'Post Type Singular Name', 'adidas' ),
		'menu_name' => _x( 'Main Slider', 'Admin Menu text', 'adidas' ),
		'name_admin_bar' => _x( 'Main Slider', 'Add New on Toolbar', 'adidas' ),
		'archives' => __( 'Main Slider Archives', 'adidas' ),
		'attributes' => __( 'Main Slider Attributes', 'adidas' ),
		'parent_item_colon' => __( 'Parent Main Slider:', 'adidas' ),
		'all_items' => __( 'All Main Slider', 'adidas' ),
		'add_new_item' => __( 'Add New Main Slider', 'adidas' ),
		'add_new' => __( 'Add New', 'adidas' ),
		'new_item' => __( 'New Main Slider', 'adidas' ),
		'edit_item' => __( 'Edit Main Slider', 'adidas' ),
		'update_item' => __( 'Update Main Slider', 'adidas' ),
		'view_item' => __( 'View Main Slider', 'adidas' ),
		'view_items' => __( 'View Main Slider', 'adidas' ),
		'search_items' => __( 'Search Main Slider', 'adidas' ),
		'not_found' => __( 'Not found', 'adidas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'adidas' ),
		'featured_image' => __( 'Featured Image', 'adidas' ),
		'set_featured_image' => __( 'Set featured image', 'adidas' ),
		'remove_featured_image' => __( 'Remove featured image', 'adidas' ),
		'use_featured_image' => __( 'Use as featured image', 'adidas' ),
		'insert_into_item' => __( 'Insert into Main Slider', 'adidas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Main Slider', 'adidas' ),
		'items_list' => __( 'Main Slider list', 'adidas' ),
		'items_list_navigation' => __( 'Main Slider list navigation', 'adidas' ),
		'filter_items_list' => __( 'Filter Main Slider list', 'adidas' ),
	);
	$args = array(
		'label' => __( 'Main Slider', 'adidas' ),
		'description' => __( 'Main slider shows slides on the top of the home page', 'adidas' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array('slidercategory'), // Link taxonomy here
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
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
	register_post_type( 'mainslider', $args );

}
add_action( 'init', 'create_mainslider_cpt', 0 );

// Register Taxonomy Slider Category
function create_slidercategory_tax() {

	$labels = array(
		'name'              => _x( 'Slider Category', 'taxonomy general name', 'adidas' ),
		'singular_name'     => _x( 'Slider Category', 'taxonomy singular name', 'adidas' ),
		'search_items'      => __( 'Search Slider Category', 'adidas' ),
		'all_items'         => __( 'All Slider Category', 'adidas' ),
		'parent_item'       => __( 'Parent Slider Category', 'adidas' ),
		'parent_item_colon' => __( 'Parent Slider Category:', 'adidas' ),
		'edit_item'         => __( 'Edit Slider Category', 'adidas' ),
		'update_item'       => __( 'Update Slider Category', 'adidas' ),
		'add_new_item'      => __( 'Add New Slider Category', 'adidas' ),
		'new_item_name'     => __( 'New Slider Category Name', 'adidas' ),
		'menu_name'         => __( 'Slider Category', 'adidas' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'adidas' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'slidercategory', array('mainslider'), $args ); // Link taxonomy to post type

}
add_action( 'init', 'create_slidercategory_tax' );
?>
