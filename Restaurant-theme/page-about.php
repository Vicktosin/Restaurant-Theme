<?php
/**
 * About page template
 * Template Name: About Page
 *
 * @package restaurant
 */

get_header(); ?>

<div class="container">
  <h1><?php the_title(); ?></h1>
  <div class="hero" style="padding-top: 16px;">
    <div class="copy">
      <p><?php esc_html_e( 'Since opening our doors, we have pursued a singular vision: to bring people together over extraordinary food and heartfelt hospitality.', 'restaurant' ); ?></p>
      <p><?php esc_html_e( 'Our team blends time-honored recipes with contemporary techniques, crafting plates that are familiar yet surprising.', 'restaurant' ); ?></p>
    </div>
    <div class="media" data-animate>
      <img src="<?php echo esc_url( RESTAURANT_URI . '/assets/images/about.svg' ); ?>" alt="<?php esc_attr_e( 'Our team', 'restaurant' ); ?>">
    </div>
  </div>

  <section>
    <h2 class="section-title" style="text-align:left;"><?php esc_html_e( 'Our Team', 'restaurant' ); ?></h2>
    <div class="grid">
      <?php
      $staff = [
        [ 'title' => 'Head Chef', 'desc' => 'Leads the kitchen with seasonal creativity.', 'img' => RESTAURANT_URI . '/assets/images/chef.jpg' ],
        [ 'title' => 'Sommelier', 'desc' => 'Curates our thoughtful wine program.', 'img' => RESTAURANT_URI . '/assets/images/sommelier.jpg' ],
        [ 'title' => 'General Manager', 'desc' => 'Designs experiences that delight guests.', 'img' => RESTAURANT_URI . '/assets/images/manager.jpg' ],
      ];
      foreach ( $staff as $person ) : ?>
        <article class="card">
          <img src="<?php echo esc_url( $person['img'] ); ?>" alt="<?php echo esc_attr( $person['title'] ); ?>">
          <div class="content">
            <h3><?php echo esc_html( $person['title'] ); ?></h3>
            <p><?php echo esc_html( $person['desc'] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<?php get_footer();


