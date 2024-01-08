<?php 
if(!function_exists('vantu_theme_setup')){
    function vantu_theme_setup(){

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
    add_action('init', 'vantu_theme_setup');
}

if(!function_exists('vantu_menu')){
    function vantu_menu($menu){
        $menu = array(
            'theme_location'    => $menu,
            'container'     => 'nav',
            'container_class'   => $menu,
        );
        wp_nav_menu($menu);
    }
}

function loadStyle(){
    wp_enqueue_style('index-css', get_stylesheet_directory_uri().'/assets/css/index.css');

    wp_enqueue_script('index-js', get_stylesheet_directory_uri().'/assets/js/index.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'loadStyle');