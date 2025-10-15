<?php
/**
 * Theme bootstrap for Restaurant Theme
 *
 * @package restaurant
 */

// Define theme version for cache-busting assets.
if ( ! defined( 'RESTAURANT_VERSION' ) ) {
  define( 'RESTAURANT_VERSION', '1.0.0' );
}

// Set up constants for paths/URIs.
if ( ! defined( 'RESTAURANT_PATH' ) ) {
  define( 'RESTAURANT_PATH', get_template_directory() );
}
if ( ! defined( 'RESTAURANT_URI' ) ) {
  define( 'RESTAURANT_URI', get_template_directory_uri() );
}

// Load text domain.
add_action( 'after_setup_theme', function () {
  load_theme_textdomain( 'restaurant', RESTAURANT_PATH . '/languages' );
} );

// Include modular setup files.
require_once RESTAURANT_PATH . '/inc/setup.php';
require_once RESTAURANT_PATH . '/inc/enqueue.php';
require_once RESTAURANT_PATH . '/inc/widgets.php';


