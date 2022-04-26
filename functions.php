<?php

function startup_setup() {

    load_theme_textdomain('startup', get_template_directory() . '/languages');

    add_theme_support('post-thumbnails', array('sliders'));

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'startup')
    ));

}
add_action('after_setup_theme', 'startup_setup');

function startup_assets() {


    // Load All CSS
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'startup-style', get_stylesheet_uri() );

    // Load All JS
    wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'startup_assets');

function startup_cpt() {

    // Slider Custom Post
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'startup' ),
        'add_new_item'          => __( 'Add New slider', 'startup' ),
        'new_item'              => __( 'New slider', 'startup' ),
        'edit_item'             => __( 'Edit slider', 'startup' ),
        'view_item'             => __( 'View slider', 'startup' ),
        'all_items'             => __( 'All Sliders', 'startup' ),
        'search_items'          => __( 'Search sliders', 'startup' ),
        'parent_item_colon'     => __( 'Parent sliders:', 'startup' ),
        'not_found'             => __( 'No sliders found.', 'startup' ),
        'not_found_in_trash'    => __( 'No sliders found in Trash.', 'startup' ),
        'featured_image'        => _x( 'Slider Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'startup' ),
        'set_featured_image'    => _x( 'Set slider image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'startup' ),
        'remove_featured_image' => _x( 'Remove slider image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'startup' ),
    );     

    $args = array(
        'public'    => true,
        'labels'     => $labels,
        'menu_icon' => 'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'sliders' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'thumbnail', 'custom-fields', 'thubmnail' )
    );

    register_post_type('sliders', $args);

    // Services Custom Post
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'startup' ),
        'add_new_item'          => __( 'Add New service', 'startup' ),
        'new_item'              => __( 'New service', 'startup' ),
        'edit_item'             => __( 'Edit service', 'startup' ),
        'view_item'             => __( 'View service', 'startup' ),
        'all_items'             => __( 'All Services', 'startup' ),
        'search_items'          => __( 'Search services', 'startup' ),
        'parent_item_colon'     => __( 'Parent services:', 'startup' ),
        'not_found'             => __( 'No services found.', 'startup' ),
        'not_found_in_trash'    => __( 'No services found in Trash.', 'startup' )
    );     

    $args = array(
        'public'    => true,
        'labels'     => $labels,
        'menu_icon' => 'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'sliders' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'custom-fields', 'thubmnail' )
    );

    register_post_type('services', $args);

    // Price Custom Post
    $labels = array(
        'name'                  => _x( 'Prices', 'Post type general name', 'startup' ),
        'singular_name'         => _x( 'Price', 'Post type singular name', 'startup' ),
        'menu_name'             => _x( 'Prices', 'Admin Menu text', 'startup' ),
        'name_admin_bar'        => _x( 'Price', 'Add New on Toolbar', 'startup' ),
        'add_new'               => __( 'Add New', 'startup' ),
        'add_new_item'          => __( 'Add New price', 'startup' ),
        'new_item'              => __( 'New price', 'startup' ),
        'edit_item'             => __( 'Edit price', 'startup' ),
        'view_item'             => __( 'View price', 'startup' ),
        'all_items'             => __( 'All Prices', 'startup' ),
        'search_items'          => __( 'Search price', 'startup' ),
        'parent_item_colon'     => __( 'Parent price:', 'startup' ),
        'not_found'             => __( 'No prices found.', 'startup' ),
        'not_found_in_trash'    => __( 'No prices found in Trash.', 'startup' )
    );     

    $args = array(
        'public'    => true,
        'labels'     => $labels,
        'menu_icon' => 'dashicons-book',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'price' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'custom-fields', 'thubmnail' )
    );

    register_post_type('price', $args);

}
add_action('init', 'startup_cpt');


function startup_acf_json( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';    
    
    // return
    return $path;    
}
add_filter('acf/settings/save_json', 'startup_acf_json');
