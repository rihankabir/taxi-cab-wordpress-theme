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

}

add_action(
    'customize_register',
    'taxi_cab_customize_register'
);