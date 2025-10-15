<?php
/**
 * Enqueue styles and scripts
 *
 * @package restaurant
 */

add_action( 'wp_enqueue_scripts', function () {
  // Main stylesheet (style.css) is auto-enqueued by WP, but we re-enqueue to ensure versioning.
  wp_enqueue_style( 'restaurant-style', get_stylesheet_uri(), [], RESTAURANT_VERSION );

  // Theme assets
  wp_enqueue_style( 'restaurant-main', RESTAURANT_URI . '/assets/css/main.css', [ 'restaurant-style' ], RESTAURANT_VERSION );
  wp_enqueue_script( 'restaurant-main', RESTAURANT_URI . '/assets/js/main.js', [], RESTAURANT_VERSION, true );
} );


