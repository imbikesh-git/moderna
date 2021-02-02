<?php
//Custom Post type

function gallery(){
	register_post_type('gallery', array(
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'has_archive'=> true,
		'public' => true,
		'labels' => array(
			'name' => 'Gallery',
			'add_new_item' => 'Add New Gallery',
			'edit_item' => 'Edit Gallery',
			'all_items' => 'All Gallery',
			'singular_name' => 'Gallery'
		),

		'menu_icon' => 'dashicons-format-gallery',

	));

	register_taxonomy(
		'gallery-category',
		'gallery',
		array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'gallery-category' ),
			'hierarchical' => true,
			'show_admin_column' => true,
		)
	);
}	
add_action( 'init', 'gallery' );