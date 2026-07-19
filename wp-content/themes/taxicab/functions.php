<?php

// Theme Setup
function taxi_cab_setup() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    register_nav_menus(
        array(
            'primary_menu' => 'Primary Menu',
            'footer_menu'  => 'Footer Menu',
        )
    );

}
add_action( 'after_setup_theme', 'taxi_cab_setup' );




function taxi_assets(){
 wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(),'5.0.3', 'all' );
wp_enqueue_style( 'template_css', get_template_directory_uri() . '/assets/css/style.css', array(),'', 'all' );
wp_enqueue_style( 'theme_css', get_template_directory_uri() );


 wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '3.7.1', true );
wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), '1.0.0', true );

   wp_enqueue_script( 'script_js', get_template_directory_uri() . '/assets/js/script.js', array(), '', true );
}
add_action('wp_enqueue_scripts','taxi_assets');

