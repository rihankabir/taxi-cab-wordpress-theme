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

}

add_action(
    'customize_register',
    'taxi_cab_customize_register'
);