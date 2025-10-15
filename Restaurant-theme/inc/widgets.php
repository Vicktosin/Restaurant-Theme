<?php
/**
 * Register widget areas
 *
 * @package restaurant
 */

add_action( 'widgets_init', function () {
  register_sidebar( [
    'name'          => __( 'Sidebar', 'restaurant' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'restaurant' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ] );

  for ( $i = 1; $i <= 3; $i++ ) {
    register_sidebar( [
      'name'          => sprintf( __( 'Footer %d', 'restaurant' ), $i ),
      'id'            => 'footer-' . $i,
      'description'   => __( 'Add widgets here to appear in your footer.', 'restaurant' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ] );
  }
} );


