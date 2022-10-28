<?php
function yvr_register_custom_post_types() {
                        
    // Register Designers
    $labels = array(
        'name'                  => _x( 'Designers', 'post type general name' ),
        'singular_name'         => _x( 'Designer', 'post type singular name'),
        'menu_name'             => _x( 'Designers', 'admin menu' ),
        'name_admin_bar'        => _x( 'Designer', 'add new on admin bar' ),
        'add_new'               => _x( 'Add New', 'Designer' ),
        'add_new_item'          => __( 'Add New Designer' ),
        'new_item'              => __( 'New Designer' ),
        'edit_item'             => __( 'Edit Designer' ),
        'view_item'             => __( 'View Designer' ),
        'all_items'             => __( 'All Designers' ),
        'search_items'          => __( 'Search Designers' ),
        'parent_item_colon'     => __( 'Parent Designers:' ),
        'not_found'             => __( 'No Designers found.' ),
        'not_found_in_trash'    => __( 'No Designers found in Trash.' ),
        'archives'              => __( 'Designer Archives'),
        'insert_into_item'      => __( 'Insert into Designer'),
        'uploaded_to_this_item' => __( 'Uploaded to this Designer'),
        'filter_item_list'      => __( 'Filter Designers list'),
        'items_list_navigation' => __( 'Designers list navigation'),
        'items_list'            => __( 'Designers list'),
        'featured_image'        => __( 'Designer featured image'),
        'set_featured_image'    => __( 'Set Designer featured image'),
        'remove_featured_image' => __( 'Remove Designer featured image'),
        'use_featured_image'    => __( 'Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'designers' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
    );

    register_post_type( 'yvr-designer', $args );

}
add_action( 'init', 'yvr_register_custom_post_types' );

function yvr_register_taxonomies() {
    // Add Designer Type taxonomy
    $labels = array(
        'name'              => _x( 'Designer Types', 'taxonomy general name' ),
        'singular_name'     => _x( 'Designer Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Designer Types' ),
        'all_items'         => __( 'All Designer Type' ),
        'parent_item'       => __( 'Parent Designer Type' ),
        'parent_item_colon' => __( 'Parent Designer Type:' ),
        'edit_item'         => __( 'Edit Designer Type' ),
        'view_item'         => __( 'View Designer Type' ),
        'update_item'       => __( 'Update Designer Type' ),
        'add_new_item'      => __( 'Add New Designer Type' ),
        'new_item_name'     => __( 'New Designer Type Name' ),
        'menu_name'         => __( 'Designer Type' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'designer-type' ),
    );
    register_taxonomy( 'yvr-designer-type', array( 'yvr-designer' ), $args );
}
add_action( 'init', 'yvr_register_taxonomies');