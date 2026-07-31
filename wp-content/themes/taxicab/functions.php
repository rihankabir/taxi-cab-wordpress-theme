<?php

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/meta-boxes.php';


// Theme Setup
function taxi_cab_setup() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    register_nav_menus(
        array(
            'primary_menu' => 'Primary Menu',
            'footer_menu_1'  => 'Footer Menu 1',
            'footer_menu_2' => 'Footer Menu 2',
        )
    );

}
add_action( 'after_setup_theme', 'taxi_cab_setup' );

// Addrd Bootstrap nav-link class
/**
 * Add Bootstrap nav-link class to menu links.
 *
 * @param array    $atts
 * @param WP_Post  $item
 * @param stdClass $args
 * @return array
 */

function taxi_cab_nav_link_class( $atts, $item, $args ) {

    if ( isset( $args->theme_location ) && 'primary_menu' === $args->theme_location ) {
        $atts['class'] = 'nav-link';
    }

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'taxi_cab_nav_link_class', 10, 3 );


// Added Bootstrap nav-item class

/**
 * Added Bootstrap nav-item class to menu items.
 *
 * @param array    $classes
 * @param WP_Post  $item
 * @param stdClass $args
 * @return array
 */
function taxi_cab_nav_item_class( $classes, $item, $args ) {

    if ( isset( $args->theme_location ) && 'primary_menu' === $args->theme_location ) {
        $classes[] = 'nav-item';
    }

    return $classes;
}

add_filter( 'nav_menu_css_class', 'taxi_cab_nav_item_class', 10, 3 );

/**
 * Add Bootstrap nav-link class to footer-menu links.
 *
 * @param array    $atts
 * @param WP_Post  $item
 * @param stdClass $args
 * @return array
 */


function taxi_cab_footer_link_class( $atts, $item, $args ) {

    if (
        isset( $args->theme_location ) &&
        in_array( $args->theme_location, array( 'footer_menu_1', 'footer_menu_2' ), true )
    ) {
        $atts['class'] = 'nav-link neolink p-0';
    }

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'taxi_cab_footer_link_class', 10, 3 );

/**
 * Added Bootstrap nav-item class to footer-menu items.
 *
 * @param array    $classes
 * @param WP_Post  $item
 * @param stdClass $args
 * @return array
 */
function taxi_cab_footer_item_class( $classes, $item, $args ) {

    if (
        isset( $args->theme_location ) &&
        in_array( $args->theme_location, array( 'footer_menu_1', 'footer_menu_2' ), true )
    ) {
        $classes[] = 'nav-item mb-2';
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'taxi_cab_footer_item_class', 10, 3 );

function taxi_assets(){

 wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(),'5.0.3', 'all' );
 wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(),'5.0.3', 'all' );
 wp_enqueue_style( 'aos_css', get_template_directory_uri() . '/assets/aos/aos.css', array(),'', 'all' );
 wp_enqueue_style(
    'fontawesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
    array(),
    '6.5.1'
);
wp_enqueue_style(
    'owl-carousel',
    get_template_directory_uri() . '/assets/css/owl.carousel.min.css',
    array(),
    '2.3.4'
);

wp_enqueue_style(
    'owl-theme',
    get_template_directory_uri() . '/assets/css/owl.theme.default.min.css',
    array('owl-carousel'),
    '2.3.4'
);
wp_enqueue_style( 'template_css', get_template_directory_uri() . '/assets/css/style.css', array(),'', 'all' );
wp_enqueue_style( 'theme_css', get_template_directory_uri() );



 wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '1.0.0', true );
 wp_enqueue_script(
    'owl-carousel',
    get_template_directory_uri() . '/assets/js/owl.carousel.min.js',
    array('jquery'),
    '2.3.4',
    true
);


wp_enqueue_script( 'aos_js', get_template_directory_uri() . '/assets/aos/aos.js', array(), '1.0.0', true );
wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.0.3', true );
   wp_enqueue_script( 'script_js', get_template_directory_uri() . '/assets/js/script.js', array(), '', true );
}
add_action('wp_enqueue_scripts','taxi_assets');

wp_localize_script(

    'your-js-handle',

    'taxi_ajax',

    array(

        'ajax_url' => admin_url( 'admin-ajax.php' ),

        'nonce'    => wp_create_nonce( 'taxi_contact_nonce' )

    )

);
add_action(

    'wp_ajax_nopriv_taxi_send_contact',

    'taxi_send_contact'

);

add_action(

    'wp_ajax_taxi_send_contact',

    'taxi_send_contact'

);
function taxi_send_contact() {

    // Verify nonce
    check_ajax_referer(
        'taxi_contact_nonce',
        'nonce'
    );

    // Get form data
    $name = sanitize_text_field(
        $_POST['name']
    );

    $email = sanitize_email(
        $_POST['email']
    );

    $phone = sanitize_text_field(
        $_POST['phone']
    );

    $subject = sanitize_text_field(
        $_POST['subject']
    );

    $message = sanitize_textarea_field(
        $_POST['message']
    );

    // Validation
    if (
        empty( $name ) ||
        empty( $email ) ||
        empty( $phone ) ||
        empty( $subject ) ||
        empty( $message )
    ) {

        wp_send_json_error(
            'All fields are required.'
        );

    }

    if ( ! is_email( $email ) ) {

        wp_send_json_error(
            'Invalid email address.'
        );

    }
$admin_email = get_option(
    'admin_email'
);

$email_subject = 'New Contact Message - Taxi Cab';

$email_body = '

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

</head>

<body style="margin:0;padding:0;background:#f4f4f4;">

<table width="100%" cellpadding="0" cellspacing="0">

<tr>

<td align="center">

<table width="650" cellpadding="0" cellspacing="0" style="background:#ffffff;font-family:Arial,sans-serif;">

<tr>

<td style="background:#ffcc00;padding:25px;text-align:center;">

<h1 style="margin:0;color:#222;">

Taxi Cab

</h1>

<p style="margin-top:10px;color:#333;">

New Contact Form Submission

</p>

</td>

</tr>

<tr>

<td style="padding:40px;">

<h2 style="color:#222;">

Customer Details

</h2>

<table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">

<tr>

<td><strong>Name</strong></td>

<td>' . esc_html( $name ) . '</td>

</tr>

<tr>

<td><strong>Email</strong></td>

<td>' . esc_html( $email ) . '</td>

</tr>

<tr>

<td><strong>Phone</strong></td>

<td>' . esc_html( $phone ) . '</td>

</tr>

<tr>

<td><strong>Subject</strong></td>

<td>' . esc_html( $subject ) . '</td>

</tr>

<tr>

<td valign="top"><strong>Message</strong></td>

<td>' . nl2br( esc_html( $message ) ) . '</td>

</tr>

</table>

</td>

</tr>

<tr>

<td style="background:#222;color:#ffffff;text-align:center;padding:20px;">

© ' . date('Y') . ' Taxi Cab.

All Rights Reserved.

</td>

</tr>

</table>

</td>

</tr>

</table>

</body>

</html>

';
$headers = array(

'Content-Type: text/html; charset=UTF-8',

'From: Taxi Cab <' . $admin_email . '>',

'Reply-To: ' . $name . ' <' . $email . '>'

);
$mail = wp_mail(

    $admin_email,

    $email_subject,

    nl2br( $email_body ),

    $headers

);
$customer_subject = 'Thank you for contacting Taxi Cab';
$customer_body = '

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

</head>

<body style="margin:0;padding:0;background:#f4f4f4;">

<table width="100%" cellpadding="0" cellspacing="0">

<tr>

<td align="center">

<table width="650" cellpadding="0" cellspacing="0" style="background:#ffffff;font-family:Arial,sans-serif;">

<tr>

<td style="background:#ffcc00;padding:30px;text-align:center;">

<h1 style="margin:0;color:#222;">

Taxi Cab

</h1>

</td>

</tr>

<tr>

<td style="padding:40px;">

<h2>

Hello ' . esc_html( $name ) . ',

</h2>

<p>

Thank you for contacting Taxi Cab.

</p>

<p>

We have successfully received your message.

</p>

<p>

Our support team will review your inquiry and get back to you as soon as possible.

</p>

<hr>

<h3>Your Submission</h3>

<p>

<strong>Subject:</strong>

' . esc_html( $subject ) . '

</p>

<p>

<strong>Message:</strong>

<br>

' . nl2br( esc_html( $message ) ) . '

</p>

<br>

<p>

Thank you for choosing Taxi Cab.

</p>

</td>

</tr>

<tr>

<td style="background:#222;padding:20px;text-align:center;color:#ffffff;">

© ' . date('Y') . ' Taxi Cab

</td>

</tr>

</table>

</td>

</tr>

</table>

</body>

</html>

';
$customer_headers = array(

'Content-Type: text/html; charset=UTF-8',

'From: Taxi Cab <' . $admin_email . '>'

);
$customer_mail = wp_mail(

$email,

$customer_subject,

$customer_body,

$customer_headers

);

if ( $mail && $customer_mail ) {

    wp_send_json_success(

        'Thank you! Your message has been sent successfully.'

    );

} else {

    wp_send_json_error(

        'Sorry, something went wrong.'

    );

}
}