<?php
//  link the files
function adidas_theme_scripts() {
    // bootstrap-js
    wp_enqueue_style( 'bootstrap-css',get_template_directory_uri(  ) ."/inc/bootstrap/css/bootstrap.min.css" );
    wp_enqueue_style( 'adidas-theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'adidas-theme-media', get_template_directory_uri(  ) ."/inc/media.css" );

    // bootstrap-js
    wp_enqueue_script( 'bootstrap-js',get_template_directory_uri(  ) ."/inc/bootstrap/js/bootstrap.bundle.min.js" );
    //  Home slider js
    // wp_enqueue_script( 'home-slider-js',get_template_directory_uri(  ) ."/inc/js/home-slider.js" );
}
add_action( 'wp_enqueue_scripts', 'adidas_theme_scripts' );

//  register sidebar and menu

function adidas_theme_register() {
    //  add theme supports
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_image_size('main-slider', 1200, 300, ['center', 'center']); // Width: 1200px, Height: 300px, Center Crop
//     used to support html 5 
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
//    add short desc for post
    add_post_type_support( 'post', 'excerpt' );
//   add short desc for page
    add_post_type_support( 'page', 'excerpt' );

    // Register the Main menu
    register_nav_menus( array(
        'main_menu'  => 'Main Menu',
    ) );
    // Register the first sidebar (Main Sidebar)
    register_sidebar(array(
        'name'          => __( 'Main Sidebar', 'adidas' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    // Register the second sidebar (Header Sidebar)
    register_sidebar(array(
        'name'          => __( 'header Sidebar', 'adidas' ),
        'id'            => 'header-sidebar',
    ));
    
    // Register the third sidebar (Footer Sidebar)
    register_sidebar(array(
        'name'          => __( 'Footer Sidebar', 'adidas' ),
        'id'            => 'footer-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    ));
    // register_sidebar(array(
    //     'name'          => __( 'Footer 2 Sidebar', 'adidas' ),
    //     'id'            => 'footer-2-sidebar',
    //     'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h2 class="widget-title">',
    //     'after_title'   => '</h2>',
    // ));
}
add_action('after_setup_theme', 'adidas_theme_register');






// include slider
require get_template_directory(  ).'/inc/slider/main-slider.php';
require get_template_directory(  ).'/inc/slider/home-slider.php';

// include Customizer
require get_template_directory(  ).'/inc/customizer/header-customizer.php';
require get_template_directory(  ).'/inc/customizer/footer-customizer.php';
?>