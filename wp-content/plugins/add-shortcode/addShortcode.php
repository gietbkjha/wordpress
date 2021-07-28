<?php
/*
Plugin Name: Add shortcode
Plugin URI: http://www.example.com/
Description: To add shotcode for welcome message
Version: 1.0
Author: Continumm
Author URI: https://continum.com
License: GPLv2 or later
Text Domain: addshortcode
*/

function show_welcome_message(){
    echo "<br/><br/>".'<b>Welcome to the Penshop</b>';
}
add_shortcode('welcome_note_plugin','show_welcome_message');

function entertainment_music() {
 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Music', 'Post Type General Name'),
        'singular_name'       => _x( 'Music', 'Post Type Singular Name'),
        'menu_name'           => __( 'Music', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Music', 'twentytwenty' ),
        'all_items'           => __( 'All Music', 'twentytwenty' ),
        'view_item'           => __( 'View Music', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Music', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Music', 'twentytwenty' ),
        'update_item'         => __( 'Update Music', 'twentytwenty' ),
        'search_items'        => __( 'Search Music', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Music', 'twentytwenty' ),
        'description'         => __( 'Music news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-audio',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true, 
    );
     
    // Registering your Custom Post Type
    //unique - no other slug should match
    register_post_type( 'music', $args );
 
}     
add_action( 'init', 'entertainment_music');

function penshop_plugin_register_style_or_script() {
    //This is to register / include script in your plugin
    wp_enqueue_script('penshop-plugin-js',plugin_dir_url( __FILE__ ).'/js/main.js',array(),false,true);
  
  }
  add_action('wp_enqueue_scripts','penshop_plugin_register_style_or_script');