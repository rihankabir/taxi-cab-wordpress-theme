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
?>

