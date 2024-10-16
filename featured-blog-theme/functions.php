<?php
/**
 * Featured Blog Bootstrap Theme functions and definitions
 */

// Theme Setup
if ( ! function_exists( 'fb_bootstrap_theme_setup' ) ) :
function fb_bootstrap_theme_setup() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );

    // Register navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'featured-blog-bootstrap-theme' ),
    ) );

    // Add support for title tag
    add_theme_support( 'title-tag' );
}
endif;
add_action( 'after_setup_theme', 'fb_bootstrap_theme_setup' );

/**
 * Enqueue styles and scripts
 */
function fb_bootstrap_theme_enqueue_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0' );

    // Enqueue main stylesheet
    wp_enqueue_style( 'fb-bootstrap-theme-style', get_stylesheet_uri(), array('bootstrap-css'), '1.0' );

    // Enqueue Bootstrap JS Bundle
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true );

    // Enqueue custom scripts if needed
}
add_action( 'wp_enqueue_scripts', 'fb_bootstrap_theme_enqueue_scripts' );

/**
 * Include WP Bootstrap Navwalker
 */
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
?>
