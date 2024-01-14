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

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
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
    wp_enqueue_style('fontawesome-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('swiper-bundle-min-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('custom-swiper-css', get_stylesheet_directory_uri().'/assets/css/custom_swiper.css');
    wp_enqueue_style('index-css', get_stylesheet_directory_uri().'/assets/css/index.css');

    wp_enqueue_script('jquery-min-js', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array('jquery'), false, true);
    wp_enqueue_script('popper-min-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-min-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiper-bundle-min-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('custom-swiper-js', get_stylesheet_directory_uri().'/assets/js/custom_swiper.js', array('jquery'), false, true);
    wp_enqueue_script('index-js', get_stylesheet_directory_uri().'/assets/js/index.js', array('jquery'), false, true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri().'/assets_custom/js/custom.js', array('jquery'), false, true);
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
function Order($sorting_options){
    $sorting_options = array(
        'menu_order' => __( '기본 정렬', 'woocommerce' ),
        'popularity' => __( '인기상품', 'woocommerce' ),
        'date'       => __( '신상품', 'woocommerce' ),
        'price'      => __( '낮은가격', 'woocommerce' ),
        'price-desc' => __( '높은가격', 'woocommerce' ),
    );

    return $sorting_options;
}
add_filter('woocommerce_catalog_orderby', 'Order');

function removeHook() {
    // remove all wc my account's notices wrapper
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

    remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
    add_action('woocommerce_shop_loop_item_title', 'custom_template_loop_product_title', 10);

}
add_action( 'init', 'removeHook', 99 );

function custom_template_loop_product_title() {
    echo get_the_title();
}

function custom_currency_symbol( $currency_symbol, $currency ) {
   
    $currency_symbol = '원';

    return $currency_symbol;
}

add_filter( 'woocommerce_currency_symbol', 'custom_currency_symbol', 10, 2 );

function custom_products_per_page( $cols ) {
    $custom_per_page = 8;

    return $custom_per_page;
}

add_filter( 'loop_shop_per_page', 'custom_products_per_page', 20 );
