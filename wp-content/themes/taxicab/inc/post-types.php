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




?>

