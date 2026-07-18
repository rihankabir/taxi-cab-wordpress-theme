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


function vtheme_assets(){



    /*
    CSS FILES
    */


    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/css/bootstrap.css'
    );



    wp_enqueue_style(
        'owl-carousel',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'
    );



    wp_enqueue_style(
        'owl-theme',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css'
    );



    wp_enqueue_style(
        'aos',
        'https://unpkg.com/aos@2.3.1/dist/aos.css'
    );



    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css'
    );



    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
    );



    /*
    YOUR THEME CSS
    */

    wp_enqueue_style(
        'vtheme-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );






    /*
    JAVASCRIPT
    */






    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array(''),
        null,
        true
    );



    wp_enqueue_script(
        'owl-carousel-js',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
        array(''),
        null,
        true
    );



    wp_enqueue_script(
        'aos-js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        array(),
        null,
        true
    );

  wp_register_script(
        'jquery',
        get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js',
        array(),
        '3.7.1',
        true
    );

    // Load jQuery
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'taxicab-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(''),
        null,
        true
    );


}


add_action(
    'wp_enqueue_scripts',
    'vtheme_assets'
);
   

?>