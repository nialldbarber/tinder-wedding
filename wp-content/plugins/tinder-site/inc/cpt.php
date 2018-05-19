<?php
/**
 * Custom post types
 */
function fh_posttypes() {

    // Exhibitions
    $labels = array(
        'name' 					=> _x( 'Exhibitions', 'fh' ),
        'singular_name' 		=> _x( 'Exhibition', 'fh' ),
        'add_new' 				=> _x( 'Add New Exhibition', 'fh' ),
        'add_new_item' 			=> _x( 'Add New Exhibition', 'fh' ),
        'edit_item'	 			=> _x( 'Edit Exhibition', 'fh' ),
        'new_item' 				=> _x( 'New Exhibition', 'fh' ),
        'view_item' 			=> _x( 'View Exhibition', 'fh' ),
        'search_items' 			=> _x( 'Search', 'fh' ),
        'not_found' 			=> _x( 'No Exhibition Found', 'fh' ),
        'not_found_in_trash' 	=> _x( 'Exhibition Not Found in Trash', 'fh' ),
        'menu_name' 			=> _x( 'Exhibitions', 'fh' ),
    );
    $args = array(
		'label' 				=> __( 'exhibitions' ),
		'description' 			=> __( 'exhibitions' ),
		'labels' 				=> $labels,
		'supports' 				=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies' 			=> array( 'category' ),
		'hierarchical' 			=> true,
		'public' 				=> true,
		'show_ui' 				=> true,
		'show_in_menu' 			=> true,
		'show_in_nav_menus' 	=> true,
		'show_in_admin_bar' 	=> true,
		'can_export'			=> true,
		'has_archive' 			=> false,
		'menu_icon' 			=> 'dashicons-format-image',
		'exclude_from_search' 	=> false,
		'publicly_queryable' 	=> true,
		'capability_type' 		=> 'page',
    );
    register_post_type( 'exhibitions', $args );  


    // Portfolio
    $labels = array(
        'name' 					=> _x( 'Portfolio', 'fh' ),
        'singular_name' 		=> _x( 'Portfolio', 'fh' ),
        'add_new' 				=> _x( 'Add New Piece', 'fh' ),
        'add_new_item' 			=> _x( 'Add New Piece', 'fh' ),
        'edit_item'	 			=> _x( 'Edit Portfolio Piece', 'fh' ),
        'new_item' 				=> _x( 'New Portfolio Piece', 'fh' ),
        'view_item' 			=> _x( 'View Portfolio Piece', 'fh' ),
        'search_items' 			=> _x( 'Search', 'fh' ),
        'not_found' 			=> _x( 'No Piece Found', 'fh' ),
        'not_found_in_trash' 	=> _x( 'Piece Not Found in Trash', 'fh' ),
        'menu_name' 			=> _x( 'Portfolio', 'fh' ),
    );
    $args = array(
		'label' 				=> __( 'portfolio' ),
		'description' 			=> __( 'portfolio' ),
		'labels' 				=> $labels,
		'supports' 				=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies' 			=> array( 'category' ),
		'hierarchical' 			=> true,
		'public' 				=> true,
		'show_ui' 				=> true,
		'show_in_menu' 			=> true,
		'show_in_nav_menus' 	=> true,
		'show_in_admin_bar' 	=> true,
		'can_export'			=> true,
		'has_archive' 			=> false,
		'menu_icon' 			=> 'dashicons-admin-customizer',
		'exclude_from_search' 	=> false,
		'publicly_queryable' 	=> true,
		'capability_type' 		=> 'post',
    );
    register_post_type( 'portfolio-pieces', $args );
}
add_action('init', 'fh_posttypes');