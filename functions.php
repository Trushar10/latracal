<?php

// Setup
define( 'ltr_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );

// Hooks
add_action('wp_enqueue_scripts', 'ltr_enqueue'); //enqueue scripts
add_action( 'after_setup_theme', 'ltr_setup_theme' ); 
add_theme_support( 'post-thumbnails' ); // add support for featured image

/*Remove [..]*/
function alx_excerpt_more( $more ) {
    return '&#46;&#46;&#46;';
}

add_filter( 'excerpt_more', 'alx_excerpt_more' );

/*excerpt word limit*/
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );