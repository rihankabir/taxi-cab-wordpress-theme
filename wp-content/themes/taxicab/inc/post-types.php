<?php 
function hero_post_types(){


register_post_type(
'hero_slide',
array(
'labels'=> array(
'name'=>('Hero_Slides'),
'singular_name'=>('Hero_Slide'),

),
'public'=>true,
'show_ui'            => true,

            'show_in_menu'       => true,

            'menu_position'      => 5,

            'menu_icon'          => 'dashicons-images-alt2',

            'supports'           => array(

                'title',
                'editor',
                'thumbnail',
                'page-attributes'

            ),

            'has_archive'        => false,

            'publicly_queryable' => false,

            'show_in_rest'       => true,


)

);

}
add_action('init','hero_post_types');

function taxi_cab_offer_post_types(){

    register_post_type(
        
'offer', array(
    'labels' => array(

'name' => ('Offers'),
'singular_name' => ('Offer'),
    ),
      'public' => true,

            'menu_icon' => 'dashicons-admin-tools',

            'supports' => array(

                'title',

                'editor',

                'page-attributes'

            ),

            'show_in_rest' => true,

)

    );

}
add_action('init','taxi_cab_offer_post_types');

function taxi_cab_testimonial_post_types(){
    
register_post_type(
    'testimonial', array(
        'labels' => array(
'name' => ('Testimonials'),
'singular_name' => ('Testimonial'),
        ),
'public' => true,
'show_in_menu' => true,
'menu_icon' => 'dashicons-format-quote',
'supports' => array(
    'title',
    'editor',
     'thumbnail',

     'page-attributes'
),
 'show_in_rest' => true

    )
);

}
add_action('init','taxi_cab_testimonial_post_types');
function taxi_cab_tariff_post_type() {

    register_post_type(

        'tariff',

        array(

            'labels' => array(

                'name' => __( 'Tariffs', 'taxi-cab' ),

                'singular_name' => __( 'Tariff', 'taxi-cab' )

            ),

            'public' => true,

            'menu_icon' => 'dashicons-money-alt',

            'supports' => array(

                'title',

                'editor',

                'thumbnail',

                'page-attributes'

            ),

            'show_in_rest' => true

        )

    );

}

add_action(
    'init',
    'taxi_cab_tariff_post_type'
);
function taxi_cab_app_feature_post_type() {

    $labels = array(

        'name'               => __( 'App Features', 'taxi-cab' ),
        'singular_name'      => __( 'App Feature', 'taxi-cab' ),
        'add_new'            => __( 'Add New Feature', 'taxi-cab' ),
        'add_new_item'       => __( 'Add New App Feature', 'taxi-cab' ),
        'edit_item'          => __( 'Edit App Feature', 'taxi-cab' ),
        'new_item'           => __( 'New App Feature', 'taxi-cab' ),
        'view_item'          => __( 'View App Feature', 'taxi-cab' ),
        'search_items'       => __( 'Search App Features', 'taxi-cab' ),
        'not_found'          => __( 'No Features Found', 'taxi-cab' ),
        'menu_name'          => __( 'App Features', 'taxi-cab' )

    );

    register_post_type(

        'app_feature',

        array(

            'labels'             => $labels,

            'public'             => true,

            'menu_icon'          => 'dashicons-smartphone',

            'supports'           => array(

                'title',
                'editor',
                'page-attributes'

            ),

            'show_in_rest'       => true,

            'has_archive'        => false,

            'publicly_queryable' => false

        )

    );

}

add_action(
    'init',
    'taxi_cab_app_feature_post_type'
);
function taxi_cab_driver_benefit_post_type() {

    $labels = array(

        'name'               => __( 'Driver Benefits', 'taxi-cab' ),
        'singular_name'      => __( 'Driver Benefit', 'taxi-cab' ),
        'add_new'            => __( 'Add New Benefit', 'taxi-cab' ),
        'add_new_item'       => __( 'Add New Driver Benefit', 'taxi-cab' ),
        'edit_item'          => __( 'Edit Driver Benefit', 'taxi-cab' ),
        'new_item'           => __( 'New Driver Benefit', 'taxi-cab' ),
        'view_item'          => __( 'View Driver Benefit', 'taxi-cab' ),
        'search_items'       => __( 'Search Driver Benefits', 'taxi-cab' ),
        'not_found'          => __( 'No Driver Benefits Found', 'taxi-cab' ),
        'menu_name'          => __( 'Driver Benefits', 'taxi-cab' ),

    );

    register_post_type(

        'driver_benefit',

        array(

            'labels'             => $labels,

            'public'             => true,

            'menu_icon'          => 'dashicons-id',

            'supports'           => array(

                'title',

                'page-attributes'

            ),

            'show_in_rest'       => true,

            'has_archive'        => false,

            'publicly_queryable' => false

        )

    );

}

add_action(
    'init',
    'taxi_cab_driver_benefit_post_type'
);
function taxi_cab_brand_post_type() {

    register_post_type(
        'brand',
        array(

            'labels' => array(
                'name'          => 'Brands',
                'singular_name' => 'Brand',
                'add_new_item'  => 'Add New Brand',
            ),

            'public' => true,

            'menu_icon' => 'dashicons-groups',

            'supports' => array(
                'title',
                'thumbnail',
                'page-attributes'
            ),

            'show_in_rest' => true,

        )
    );

}

add_action(
    'init',
    'taxi_cab_brand_post_type'
);
?>
<?php

function taxi_cab_about_counter_cpt() {

    $labels = array(
        'name'               => 'About Counters',
        'singular_name'      => 'About Counter',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Counter',
        'edit_item'          => 'Edit Counter',
        'new_item'           => 'New Counter',
        'view_item'          => 'View Counter',
        'search_items'       => 'Search Counter',
        'not_found'          => 'No Counter Found',
        'menu_name'          => 'About Counters',
    );

    $args = array(

        'labels'             => $labels,

        'public'             => true,

        'show_in_menu'       => true,

        'menu_position'      => 26,

        'menu_icon'          => 'dashicons-chart-bar',

        'supports'           => array(
            'title',
            'page-attributes'
        ),

        'has_archive'        => false,

        'publicly_queryable' => false,

        'show_ui'            => true,

    );

    register_post_type(
        'about_counter',
        $args
    );

}

add_action(
    'init',
    'taxi_cab_about_counter_cpt'
);
