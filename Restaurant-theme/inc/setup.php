<?php
/**
 * Theme setup (supports, menus, images)
 *
 * @package restaurant
 */

add_action( 'after_setup_theme', function () {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo', [
    'height'      => 80,
    'width'       => 240,
    'flex-height' => true,
    'flex-width'  => true,
  ] );
  add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );

  register_nav_menus( [
    'primary' => __( 'Primary Menu', 'restaurant' ),
    'footer'  => __( 'Footer Menu', 'restaurant' ),
  ] );

  // Image sizes for dishes/testimonials/cards
  add_image_size( 'dish-card', 800, 600, true );
  add_image_size( 'hero', 1600, 900, true );
} );


