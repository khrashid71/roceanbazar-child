<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 *  For block themes like TT5, ensure enqueues the child stylesheet 
*/
function tt5_child_enqueue_styles() {
    wp_enqueue_style( 'tt5-child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'tt5_child_enqueue_styles' );

/**
 * Inject a custom body class for roceanbazar.com background styling
 */

function roceanbazar_custom_body_class( $classes ) {
    // This adds your custom class to the existing array of WordPress body classes
    $classes[] = 'my-custom-ocean-bg'; 
    return $classes;
}
add_filter( 'body_class', 'roceanbazar_custom_body_class' );



