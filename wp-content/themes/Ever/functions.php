<?php 
if(!function_exists('ever_theme_setup')){
    function ever_theme_setup(){

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        // menu
        register_nav_menus( array(
            'main-menu' => __( 'Main Menu', 'text_domain' ),
        ) );

        
        

        $sidebar = array(
            'name' => 'Main Sidebar',
            'id'    => 'main-sidebar',
            'description' => 'main-sidebar',
            'class' => 'main-sidebar',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   =>  '</h3>',
        );
        register_sidebar($sidebar);

    }
    add_action('init', 'ever_theme_setup');
}

if(!function_exists('ever_menu')){
    function ever_menu($menu, $class){
        $menu = array(
            'theme_location'    => $menu,
            'container'     => false,
            'menu_class'    => $class,
        );
        wp_nav_menu($menu);
    }
}

function loadStyle(){
    wp_enqueue_style('bootstrap-min-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('swiper-bundle-min-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('custom-swiper-css', get_stylesheet_directory_uri().'/assets/css/custom_swiper.css');
    wp_enqueue_style('index-css', get_stylesheet_directory_uri().'/assets/css/index.css');

    wp_enqueue_script('jquery-min-js', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array('jquery'), false, true);
    wp_enqueue_script('popper-min-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiper-bundle-min-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('custom-swiper-js', get_stylesheet_directory_uri().'/assets/js/custom_swiper.js', array('jquery'), false, true);
    wp_enqueue_script('index-js', get_stylesheet_directory_uri().'/assets/js/index.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'loadStyle');

function create_review_post_type() {
    $labels = array(
        'name'               => _x( 'Reviews', 'post type general name', 'ever' ),
        'singular_name'      => _x( 'Review', 'post type singular name', 'ever' ),
        'menu_name'          => _x( 'Reviews', 'admin menu', 'ever' ),
        'name_admin_bar'     => _x( 'Review', 'add new on admin bar', 'ever' ),
        'add_new'            => _x( 'Add New', 'review', 'ever' ),
        'add_new_item'       => __( 'Add New Review', 'ever' ),
        'new_item'           => __( 'New Review', 'ever' ),
        'edit_item'          => __( 'Edit Review', 'ever' ),
        'view_item'          => __( 'View Review', 'ever' ),
        'all_items'          => __( 'All Reviews', 'ever' ),
        'search_items'       => __( 'Search Reviews', 'ever' ),
        'not_found'          => __( 'No reviews found', 'ever' ),
        'not_found_in_trash' => __( 'No reviews found in trash', 'ever' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'review' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail'),
    );

    register_post_type( 'review', $args );
}

add_action( 'init', 'create_review_post_type' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Themes Options',
        'menu_title'    => 'Themes Options',
        'menu_slug'     => 'themes-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}