<?php

function taxi_cab_customize_register( $wp_customize ) {

    $wp_customize->add_panel(
        'taxi_cab_options',
        array(
            'title'       => __( 'Taxi Cab Theme Options', 'taxi-cab' ),
            'priority'    => 30,
            'description' => 'Manage all homepage sections.',
        )
    );
    $wp_customize->add_section(
    'about_section',
    array(
        'title'    => __( 'About Section', 'taxi-cab' ),
        'panel'    => 'taxi_cab_options',
        'priority' => 1,
    )
);
$wp_customize->add_setting(
    'about_small_heading',
    array(
        'default'           => 'About Us',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'about_small_heading',
    array(
        'label'   => 'Small Heading',
        'section' => 'about_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'about_heading',
    array(
        'default' => 'We Provide Trusted <span class="txt3">Cab</span> <span class="txt4">Service</span> In The World',
    'sanitize_callback' => 'wp_kses_post',
    )
);

$wp_customize->add_control(
    'about_heading',
    array(
        'label'   => 'Main Heading',
        'section' => 'about_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'about_description',
    array(
        'default'           => 'Write your company description here.',
        'sanitize_callback' => 'wp_kses_post',
    )
);

$wp_customize->add_control(
    'about_description',
    array(
        'label'   => 'Description',
        'section' => 'about_section',
        'type'    => 'textarea',
    )
);
$wp_customize->add_setting(
    'about_button_text',
    array(
        'default'           => 'Read More',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'about_button_text',
    array(
        'label'   => 'Button Text',
        'section' => 'about_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'about_button_url',
    array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    'about_button_url',
    array(
        'label'   => 'Button URL',
        'section' => 'about_section',
        'type'    => 'url',
    )
);
$wp_customize->add_setting(
    'about_image',
    array(
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'about_image',
        array(
            'label'      => 'About Image',
            'section'    => 'about_section',
            'mime_type'  => 'image',
        )
    )
);
$wp_customize->add_section(

    'offers_section',

    array(

        'title' => 'Offers Section',

        'panel' => 'taxi_cab_options'

    )

);
$wp_customize->add_setting(

    'offer_small_heading',

    array(

        'default' => 'WHAT WE OFFER',

        'sanitize_callback' => 'sanitize_text_field'

    )

);

$wp_customize->add_control(

    'offer_small_heading',

    array(

        'label' => 'Small Heading',

        'section' => 'offers_section',

        'type' => 'text'

    )

);
$wp_customize->add_setting(

    'offer_heading',

    array(

        'default' => "We're a Company of Talented",

        'sanitize_callback' => 'sanitize_text_field'

    )

);

$wp_customize->add_control(

    'offer_heading',

    array(

        'label' => 'Main Heading',

        'section' => 'offers_section',

        'type' => 'text'

    )

);
$wp_customize->add_section(
    'tariff_section',
    array(
        'title' => 'Tariff Section',
        'panel' => 'taxi_cab_options'
    )
);
$wp_customize->add_setting(
    'tariff_small_heading',
    array(
        'default' => 'SEE',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'tariff_small_heading',
    array(
        'label' => 'Small Heading',
        'section' => 'tariff_section',
        'type' => 'text'
    )
);
$wp_customize->add_setting(
    'tariff_heading',
    array(
        'default' => 'OUR',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'tariff_heading',
    array(
        'label' => 'Middle Heading',
        'section' => 'tariff_section',
        'type' => 'text'
    )
);
$wp_customize->add_setting(
    'tariff_heading_last',
    array(
        'default' => 'TARIFFS',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'tariff_heading_last',
    array(
        'label' => 'Last Heading',
        'section' => 'tariff_section',
        'type' => 'text'
    )
);
$wp_customize->add_section(
    'app_download_section',
    array(
        'title'    => __( 'App Download Section', 'taxi-cab' ),
        'panel'    => 'taxi_cab_options',
        'priority' => 8,
    )
);
$wp_customize->add_setting(
    'app_small_heading',
    array(
        'default'           => 'Get More Benefits',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'app_small_heading',
    array(
        'label'   => 'Small Heading',
        'section' => 'app_download_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'app_heading',
    array(
        'default'           => 'DOWNLOAD THE APP',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'app_heading',
    array(
        'label'   => 'Main Heading',
        'section' => 'app_download_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'app_image',
    array(
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'app_image',
        array(
            'label'      => 'Mobile App Image',
            'section'    => 'app_download_section',
            'mime_type'  => 'image',
        )
    )
);
}

add_action(
    'customize_register',
    'taxi_cab_customize_register'
);