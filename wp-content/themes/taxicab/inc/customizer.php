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
$wp_customize->add_section(
    'driver_section',array(
        'title'=>('Driver Section'),
         'panel'    => 'taxi_cab_options',
        'priority' => 9,
    )
);
$wp_customize->add_setting(
    'driver_small_heading',
    array(
        'default' => 'For Drivers',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'driver_small_heading',
    array(
        'label' => 'Small Heading',
        'section' => 'driver_section',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'driver_heading',
    array(
        'default' => 'Do You Want To Earn With Us?',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'driver_heading',
    array(
        'label' => 'Main Heading',
        'section' => 'driver_section',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'driver_description',
    array(
        'default' => 'Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit, massa efficitur dapibus pulvinar, sapien eros sodales ante, euismod aliquet nulla metus a mauris.',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);

$wp_customize->add_control(
    'driver_description',
    array(
        'label' => 'Description',
        'section' => 'driver_section',
        'type' => 'textarea',
    )
);
$wp_customize->add_setting(
    'driver_image',
    array(
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'driver_image',
        array(
            'label' => 'Driver Section Image',
            'section' => 'driver_section',
            'mime_type' => 'image',
        )
    )
);
$wp_customize->add_section(
    'promo_section',
    array(
        'title'=>('Promo Banner'),
        'panel'=>('taxi_cab_options'),
        'priority'=>10,
    )
);
$wp_customize->add_setting(
    'promo_image_one',
    array(
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'promo_image_one',
        array(
            'label'     => 'Banner One Image',
            'section'   => 'promo_section',
            'mime_type' => 'image',
        )
    )
);
$wp_customize->add_setting(
    'promo_discount',
    array(
        'default' => '-50%',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'promo_discount',
    array(
        'label'   => 'Discount Text',
        'section' => 'promo_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'promo_heading_one',
    array(
        'default' => 'ON FIRST ORDER',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'promo_heading_one',
    array(
        'label'   => 'Banner One Heading',
        'section' => 'promo_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'promo_sub_heading',
    array(
        'default' => 'SPECIAL OFFER',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'promo_sub_heading',
    array(
        'label'   => 'Banner One Sub Heading',
        'section' => 'promo_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'promo_image_two',
    array(
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'promo_image_two',
        array(
            'label'     => 'Banner Two Image',
            'section'   => 'promo_section',
            'mime_type' => 'image',
        )
    )
);
$wp_customize->add_setting(
    'promo_heading_two',
    array(
        'default' => 'Business Car Rental',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'promo_heading_two',
    array(
        'label'   => 'Banner Two Heading',
        'section' => 'promo_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'promo_description_two',
    array(
        'default' => 'If U need a Luxury Car for Business, We are here to provide',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);

$wp_customize->add_control(
    'promo_description_two',
    array(
        'label'   => 'Banner Two Description',
        'section' => 'promo_section',
        'type'    => 'textarea',
    )
);
$wp_customize->add_section(

'brand_section',

array(

'title'=>'Brands',

'panel'=>'taxi_cab_options'

)

);
$wp_customize->add_setting(

'brand_small_heading',

array(

'default'=>'OUR PARTNERS',

'sanitize_callback'=>'sanitize_text_field'

)

);

$wp_customize->add_control(

'brand_small_heading',

array(

'label'=>'Small Heading',

'section'=>'brand_section',

'type'=>'text'

)

);
$wp_customize->add_setting(

'brand_heading',

array(

'default'=>'AND CLIENTS',

'sanitize_callback'=>'sanitize_text_field'

)

);

$wp_customize->add_control(

'brand_heading',

array(

'label'=>'Main Heading',

'section'=>'brand_section',

'type'=>'text'

)

);
$wp_customize->add_section(
    'top_header_section',
    array(
        'title'    => __('Top Header', 'taxi-cab'),
        'panel'    => 'taxi_cab_options',
        'priority' => 2,
    )
);
$wp_customize->add_setting(
    'top_phone',
    array(
        'default' => '+44 20 7946 0123',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'top_phone',
    array(
        'label'   => 'Phone Number',
        'section' => 'top_header_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'top_email',
    array(
        'default' => 'gettaxi@taxicab.co.uk',
        'sanitize_callback' => 'sanitize_email',
    )
);
$wp_customize->add_control(
    'top_email',
    array(
        'label'   => 'Email Address',
        'section' => 'top_header_section',
        'type'    => 'email',
    )
);
$wp_customize->add_setting(
    'facebook_url',
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'facebook_url',
    array(
        'label'   => 'Facebook URL',
        'section' => 'top_header_section',
        'type'    => 'url',
    )
);
$wp_customize->add_setting(
    'twitter_url',
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'twitter_url',
    array(
        'label'   => 'Twitter URL',
        'section' => 'top_header_section',
        'type'    => 'url',
    )
);
$wp_customize->add_setting(
    'instagram_url',
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'instagram_url',
    array(
        'label'   => 'Instagram URL',
        'section' => 'top_header_section',
        'type'    => 'url',
    )
);
$wp_customize->add_setting(
    'linkedin_url',
    array(
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'linkedin_url',
    array(
        'label'   => 'LinkedIn URL',
        'section' => 'top_header_section',
        'type'    => 'url',
    )
);
$wp_customize->add_section(
'footer_settings',
array(
'title'=>('Footer Settings'),
'priority'=>200,
)

);
$wp_customize->add_setting(
    'footer_about_title',
    array(
        'default'=>'ABOUT US',
        'sanitize_callback'=>'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'footer_about_title',
    array(
        'label'=>'About Title',
        'section'=>'footer_settings',
        'type'=>'text',
    )
);
$wp_customize->add_setting(
    'footer_about_text',
    array(
        'default' => 'Trusted by thousands of passengers, our taxi service delivers dependable transportation with a focus on safety, comfort, and efficiency.',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);

$wp_customize->add_control(
    'footer_about_text',
    array(
        'label'   => 'About Description',
        'section' => 'footer_settings',
        'type'    => 'textarea',
    )
);
$wp_customize->add_setting(
    'footer_explore_title',
    array(
        'default'=>'EXPLORE',
        'sanitize_callback'=>'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'footer_explore_title',
    array(
        'label'=>'Explore Title',
        'section'=>'footer_settings',
        'type'=>'text'
    )
);
$wp_customize->add_setting(
    'footer_contact_title',
    array(
        'default'=>'CONTACT US',
        'sanitize_callback'=>'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'footer_contact_title',
    array(
        'label'=>'Contact Title',
        'section'=>'footer_settings',
        'type'=>'text'
    )
);
$wp_customize->add_setting(
    'footer_address',
    array(
        'default'=>'56/Taylor Road, London, United Kingdom',
        'sanitize_callback'=>'sanitize_textarea_field'
    )
);

$wp_customize->add_control(
    'footer_address',
    array(
        'label'=>'Address',
        'section'=>'footer_settings',
        'type'=>'textarea'
    )
);
$wp_customize->add_setting(
    'footer_phone',
    array(
        'default'=>'+44 20 7946 0123',
        'sanitize_callback'=>'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'footer_phone',
    array(
        'label'=>'Phone',
        'section'=>'footer_settings',
        'type'=>'text'
    )
);
$wp_customize->add_setting(
    'footer_email',
    array(
        'default'=>'gettaxi@taxicab.co.uk',
        'sanitize_callback'=>'sanitize_email'
    )
);

$wp_customize->add_control(
    'footer_email',
    array(
        'label'=>'Email',
        'section'=>'footer_settings',
        'type'=>'email'
    )
);
$wp_customize->add_setting(
    'footer_copyright',
    array(
        'default'=>'All Rights Reserved.',
        'sanitize_callback'=>'sanitize_text_field'
    )
);

$wp_customize->add_control(
    'footer_copyright',
    array(
        'label'=>'Copyright Text',
        'section'=>'footer_settings',
        'type'=>'text'
    )
);
$wp_customize->add_section(

    'about_page_banner',

    array(

        'title' => __('About Page Banner', 'taxi-cab'),

        'priority' => 1,

    )

);
$wp_customize->add_setting(

    'about_banner_image',

    array(

        'sanitize_callback' => 'absint',

    )

);

$wp_customize->add_control(

    new WP_Customize_Media_Control(

        $wp_customize,

        'about_banner_image',

        array(

            'label' => 'Banner Background',

            'section' => 'about_page_banner',

            'mime_type' => 'image',

        )

    )

);
$wp_customize->add_setting(

    'about_banner_small_heading',

    array(

        'default' => 'Welcome',

        'sanitize_callback' => 'sanitize_text_field',

    )

);

$wp_customize->add_control(

    'about_banner_small_heading',

    array(

        'label' => 'Small Heading',

        'section' => 'about_page_banner',

        'type' => 'text',

    )

);
$wp_customize->add_setting(

    'about_banner_heading',

    array(

        'default' => 'About Us',

        'sanitize_callback' => 'sanitize_text_field',

    )

);

$wp_customize->add_control(

    'about_banner_heading',

    array(

        'label' => 'Main Heading',

        'section' => 'about_page_banner',

        'type' => 'text',

    )

);
$wp_customize->add_setting(

    'about_banner_breadcrumb',

    array(

        'default' => 'About Us',

        'sanitize_callback' => 'sanitize_text_field',

    )

);

$wp_customize->add_control(

    'about_banner_breadcrumb',

    array(

        'label' => 'Breadcrumb Title',

        'section' => 'about_page_banner',

        'type' => 'text',

    )

);
$wp_customize->add_section(
    'about_intro_section',
    array(
        'title'    => __('About Intro Section', 'taxi-cab'),
        'priority' => 2,
    )
);
$wp_customize->add_setting(
    'about_intro_yellow_text',
    array(
        'default' => 'WHO',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'about_intro_yellow_text',
    array(
        'label'   => 'Yellow Word',
        'section' => 'about_intro_section',
        'type'    => 'text',
    )
);

$wp_customize->add_setting(
    'about_intro_heading',
    array(
        'default' => 'WE ARE',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'about_intro_heading',
    array(
        'label'   => 'Main Heading',
        'section' => 'about_intro_section',
        'type'    => 'text',
    )
);
$wp_customize->add_setting(
    'about_intro_description',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);
$wp_customize->add_control(
    'about_intro_description',
    array(
        'label'   => 'Description',
        'section' => 'about_intro_section',
        'type'    => 'textarea',
    )
);
$wp_customize->add_setting(
    'about_intro_image',
    array(
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new WP_Customize_Media_Control(
        $wp_customize,
        'about_intro_image',
        array(
            'label' => 'Right Image',
            'section' => 'about_intro_section',
            'mime_type' => 'image',
        )
    )
);
$wp_customize->add_section(

'About_testimonial_section',

array(

'title'=>'Testimonials',

'panel'=>'taxi_cab_options',

)

);

$wp_customize->add_setting(

'testimonial_heading',

array(

'default'=>'Testimonials',

'sanitize_callback'=>'sanitize_text_field'

)

);

$wp_customize->add_control(

'testimonial_heading',

array(

'label'=>'Heading',

'section'=>'About_testimonial_section',

'type'=>'text'

)

);
$wp_customize->add_section(

    'about_driver_section',

    array(

        'title'    => __( 'About Driver Section', 'taxi-cab' ),

        'priority' => 80,

    )

);
$wp_customize->add_setting(

    'about_driver_heading',

    array(

        'default'           => 'Our Drivers',

        'sanitize_callback' => 'sanitize_text_field',

    )

);

$wp_customize->add_control(

    'about_driver_heading',

    array(

        'label'   => 'Heading',

        'section' => 'about_driver_section',

        'type'    => 'text',

    )

);
$wp_customize->add_setting(

    'about_driver_description',

    array(

        'default' => 'Meet our professional and experienced drivers committed to providing a safe, comfortable, and reliable journey every time.',

        'sanitize_callback' => 'sanitize_textarea_field',

    )

);

$wp_customize->add_control(

    'about_driver_description',

    array(

        'label'   => 'Description',

        'section' => 'about_driver_section',

        'type'    => 'textarea',

    )

);
$wp_customize->add_section(

    'service_breadcrumb_section',

    array(

        'title'    => __( 'Service Breadcrumb', 'taxi-cab' ),

        'priority' => 90,

    )

);
$wp_customize->add_setting(

    'service_banner_image',

    array(

        'sanitize_callback' => 'absint',

    )

);

$wp_customize->add_control(

    new WP_Customize_Media_Control(

        $wp_customize,

        'service_banner_image',

        array(

            'label'      => 'Banner Background Image',

            'section'    => 'service_breadcrumb_section',

            'mime_type'  => 'image',

        )

    )

);
$wp_customize->add_setting(

    'service_banner_heading',

    array(

        'default'           => 'Services',

        'sanitize_callback' => 'sanitize_text_field',

    )

);

$wp_customize->add_control(

    'service_banner_heading',

    array(

        'label'   => 'Page Heading',

        'section' => 'service_breadcrumb_section',

        'type'    => 'text',

    )

);
$wp_customize->add_section(

    'service_page_services_section',

    array(

        'title'    => __( 'Service Page Services', 'taxi-cab' ),

        'priority' => 100,

    )

);
$wp_customize->add_setting(

    'service_page_heading',

    array(

        'default'           => 'Our Services',

        'sanitize_callback' => 'sanitize_text_field',

    )

);
$wp_customize->add_control(

    'service_page_heading',

    array(

        'label'   => 'Heading',

        'section' => 'service_page_services_section',

        'type'    => 'text',

    )

);
$wp_customize->add_setting(

    'service_page_description',

    array(

        'default' => 'We provide reliable, safe, and affordable transportation services tailored to your travel needs.',

        'sanitize_callback' => 'sanitize_textarea_field',

    )

);
$wp_customize->add_control(

    'service_page_description',

    array(

        'label'   => 'Description',

        'section' => 'service_page_services_section',

        'type'    => 'textarea',

    )

);
$wp_customize->add_section(

    'contact_breadcrumb_section',

    array(

        'title'    => 'Contact Breadcrumb',

        'priority' => 90,

    )

);
$wp_customize->add_setting(

    'contact_banner_image',

    array(

        'sanitize_callback' => 'absint',

    )

);
$wp_customize->add_control(

    new WP_Customize_Media_Control(

        $wp_customize,

        'contact_banner_image',

        array(

            'label'    => 'Banner Image',

            'section'  => 'contact_breadcrumb_section',

            'mime_type'=> 'image',

        )

    )

);
}

add_action(
    'customize_register',
    'taxi_cab_customize_register'
);