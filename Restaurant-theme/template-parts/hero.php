<?php
/**
 * Hero section
 *
 * @package restaurant
 */
?>
<section class="hero container" aria-labelledby="hero-title">
  <div class="copy">
    <div class="eyebrow"><?php esc_html_e( 'Welcome to', 'restaurant' ); ?></div>
    <h1 id="hero-title"><?php bloginfo( 'name' ); ?></h1>
    <p><?php bloginfo( 'description' ); ?></p>
    <div class="actions">
      <a class="btn btn-primary" href="<?php echo esc_url( get_permalink( get_page_by_path( 'menu' ) ) ); ?>"><?php esc_html_e( 'View Menu', 'restaurant' ); ?></a>
      <a class="btn btn-outline" href="<?php echo esc_url( get_permalink( get_page_by_path( 'reservations' ) ) ); ?>"><?php esc_html_e( 'Book a Table', 'restaurant' ); ?></a>
    </div>
  </div>
  <div class="media" data-animate>
    <img src="<?php echo esc_url( RESTAURANT_URI . '/assets/images/hero.svg' ); ?>" alt="<?php esc_attr_e( 'Signature dish', 'restaurant' ); ?>">
  </div>
  
</section>


