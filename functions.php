<?php

add_theme_support( 'menus' );

function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );


function boom_theme_styles() {
    
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
    
}
add_action( 'wp_enqueue_scripts', 'boom_theme_styles' );

// Register Sidebars
function custom_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'Cambodia' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

}
add_action( 'widgets_init', 'custom_sidebars' );

?>