<?php

// Add styles to theme
function add_styles(){
  wp_enqueue_style('main_css', get_template_directory_uri() . '/dist/css/bundle.css');
}
add_action('wp_enqueue_scripts', 'add_styles');

// Add scripts to theme
function add_scripts(){
  wp_deregister_script('wp-embed.min.js');
  wp_deregister_script('wp-embed');
  wp_deregister_script('embed');
  wp_enqueue_script('bundle', get_template_directory_uri() . '/dist/js/bundle.js', array('jQuery'), '1.0.1', true);
  wp_localize_script( 'bundle', 'BlogInfo', array('url' => get_bloginfo('template_directory').'/', 'site' => get_bloginfo('wpurl'), 'ajax_url' => admin_url( 'admin-ajax.php' )));
}
add_action('wp_enqueue_scripts', 'add_scripts');

/* COMMENTS */
add_theme_support( 'post-thumbnails' );
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action('init', 'remove_comment_support', 100);
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

// Post Types
function postTypes() {

  register_post_type( 'is3_insider',
    array(
      'labels' => array(
        'name' => __( 'Inside IS³' ),
        'singular_name' => __( 'Page' ),
        'menu_name' => 'Inside IS³',
        'edit_item' => 'Edit Page',
        'view_item' => 'View Page',
        'add_new' => 'Add Page',
        'parent_item_colon' => 'inside-is3'
      ),
      'public' => true,
      'hierarchical' => true,
      'menu_icon' => 'dashicons-groups',
      'has_archive' => true,
      'show_in_rest' => true,
      'capability_type' => 'post',
      'supports' => array('title', 'editor', 'page-attributes'),
      'rewrite'=> array( 'slug' => 'inside-is3' )
    )
  );

  register_post_type( 'is3_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' ),
        'menu_name' => 'Software',
        'edit_item' => 'Edit Product',
        'view_item' => 'View Product',
        'add_new' => 'Add Product',
        'parent_item_colon' => 'Suite'
      ),
      'public' => true,
      'hierarchical' => true,
      'menu_icon' => 'dashicons-cart',
      'has_archive' => true,
      'show_in_rest' => true,
      'capability_type' => 'post',
      'supports' => array('title', 'editor', 'page-attributes'),
      'rewrite'=> array( 'slug' => 'software-solutions' )
    )
  );

  register_post_type( 'is3_industry',
  array(
    'labels' => array(
      'name' => __( 'Industries' ),
      'singular_name' => __( 'Page' ),
      'menu_name' => 'Industries',
      'edit_item' => 'Edit Page',
      'view_item' => 'View Page',
      'add_new' => 'Add Page',
      'parent_item_colon' => 'industries'
    ),
    'public' => true,
    'hierarchical' => true,
    'menu_icon' => 'dashicons-admin-multisite',
    'has_archive' => true,
    'show_in_rest' => true,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'page-attributes'),
    'rewrite'=> array( 'slug' => 'industries' )
    )
  );

  register_post_type( 'is3_resource',
  array(
    'labels' => array(
      'name' => __( 'Resources' ),
      'singular_name' => __( 'Page' ),
      'menu_name' => 'Resources',
      'edit_item' => 'Edit Page',
      'view_item' => 'View Page',
      'add_new' => 'Add Page',
      'parent_item_colon' => 'resources'
    ),
    'public' => true,
    'hierarchical' => true,
    'menu_icon' => 'dashicons-welcome-widgets-menus',
    'has_archive' => true,
    'show_in_rest' => true,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'page-attributes'),
    'rewrite'=> array( 'slug' => 'resources' )
    )
  );

  register_post_type( 'is3_support',
  array(
    'labels' => array(
      'name' => __( 'Support' ),
      'singular_name' => __( 'Page' ),
      'menu_name' => 'Support',
      'edit_item' => 'Edit Page',
      'view_item' => 'View Page',
      'add_new' => 'Add Page',
      'parent_item_colon' => 'support'
    ),
    'public' => true,
    'hierarchical' => true,
    'menu_icon' => 'dashicons-laptop',
    'has_archive' => true,
    'show_in_rest' => true,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'page-attributes'),
    'rewrite'=> array( 'slug' => 'resources' )
    )
  );

}