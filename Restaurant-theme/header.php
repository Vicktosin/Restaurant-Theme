<?php
/**
 * Header template
 *
 * @package restaurant
 */
?><!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
  <a class="sr-only" href="#content">Skip to content</a>
  <?php wp_body_open(); ?>
  <header class="site-header" role="banner">
    <div class="container inner">
      <div class="brand">
        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
          the_custom_logo();
        } else { ?>
          <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <?php } ?>
      </div>
      <nav class="primary-nav" aria-label="<?php esc_attr_e( 'Primary', 'restaurant' ); ?>">
        <?php
          wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu',
            'fallback_cb'    => '__return_empty_string',
          ] );
        ?>
      </nav>
      <button class="btn btn-outline" id="themeToggle" aria-label="<?php esc_attr_e( 'Toggle theme', 'restaurant' ); ?>">&#9788;</button>
    </div>
  </header>
  <main class="site-main" id="content" role="main">

