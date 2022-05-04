<?php

function startup_setup() {

    load_theme_textdomain('startup', get_template_directory() . '/languages');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails', array('post', 'sliders', 'team'));

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'startup'),        
        'footer1-menu' => __('Footer 1 Menu', 'startup'),
        'footer2-menu' => __('Footer 2 Menu', 'startup')
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


function startup_acf_json( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';    
    
    // return
    return $path;    
}
add_filter('acf/settings/save_json', 'startup_acf_json');


// Pagination

function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}

// Sidebar Register

function startup_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'startup' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-5">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'startup_sidebar' );

function startup_footer_address_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer Address', 'startup' ),
        'id'            => 'footer-address',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'startup_footer_address_widget' );

function startup_footer1_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'startup' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'startup_footer1_widget' );

function startup_footer2_widget() {
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'startup' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'startup' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="section-title section-title-sm position-relative pb-3 mb-4">
        <h3 class="text-light mb-0">',
        'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'startup_footer2_widget' );


function startup_move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'startup_move_comment_field' );

function startup_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Your Name"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Your Email"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'startup_comment_form_fields' );

function startup_comment_textarea_placeholder( $args ) {
	$args['comment_field'] = str_replace( 'textarea', 'textarea placeholder="Comment"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'startup_comment_textarea_placeholder' );

// change submit button text in wordpress comment form
function startup_change_submit_button_text( $defaults ) {
    $defaults['label_submit'] = 'Leave Your Comment';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'startup_change_submit_button_text' );


// Theme Options with ACF
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}


// Search Widget
include_once get_template_directory(). '/inc/widgets/search-widget.php';

// Category Widget
include_once get_template_directory(). '/inc/widgets/category-widget.php';

// Recent Post Widget
include_once get_template_directory(). '/inc/widgets/recent-post-widget.php';

// Tags Widget
include_once get_template_directory(). '/inc/widgets/tags-widget.php';

// Plain Text Widget
include_once get_template_directory(). '/inc/widgets/plain-text-widget.php';

// Footer Address Widget
include_once get_template_directory(). '/inc/widgets/footer-address-widget.php';

// One Click Demo Data
include_once get_template_directory(). '/inc/one-click-demo-data.php';

// TGM Load
include_once get_template_directory(). '/inc/startup-tgm.php';