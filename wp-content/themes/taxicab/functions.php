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



   

?>