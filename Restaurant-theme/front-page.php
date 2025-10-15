<?php
/**
 * Front Page template
 *
 * @package restaurant
 */

get_header(); ?>

<?php get_template_part( 'template-parts/hero' ); ?>

<section class="container" aria-labelledby="featured-dishes-title">
  <h2 id="featured-dishes-title" class="section-title"><?php esc_html_e( 'Featured Dishes', 'restaurant' ); ?></h2>
  <div class="grid">
    <?php
    // Demo dish cards (placeholder). In production, could be CPT or posts.
    $dishes = [
      [ 'title' => 'Truffle Pasta', 'price' => '$18', 'img' => RESTAURANT_URI . '/assets/images/dish1.svg', 'desc' => 'Homemade pasta with black truffle cream.' ],
      [ 'title' => 'Seared Salmon', 'price' => '$22', 'img' => RESTAURANT_URI . '/assets/images/dish2.svg', 'desc' => 'Pan-seared salmon with lemon butter.' ],
      [ 'title' => 'Steak Au Poivre', 'price' => '$29', 'img' => RESTAURANT_URI . '/assets/images/dish3.svg', 'desc' => 'Peppercorn crusted steak with brandy sauce.' ],
      [ 'title' => 'Caprese Salad', 'price' => '$12', 'img' => RESTAURANT_URI . '/assets/images/dish4.svg', 'desc' => 'Heirloom tomatoes, mozzarella, basil.' ],
      [ 'title' => 'Margherita Pizza', 'price' => '$16', 'img' => RESTAURANT_URI . '/assets/images/dish5.svg', 'desc' => 'San Marzano tomatoes, fresh mozzarella, basil.' ],
      [ 'title' => 'Tiramisu', 'price' => '$9', 'img' => RESTAURANT_URI . '/assets/images/dish6.svg', 'desc' => 'Classic Italian coffee dessert.' ],
    ];

    foreach ( $dishes as $dish ) {
      set_query_var( 'restaurant_card', $dish );
      get_template_part( 'template-parts/menu', 'card' );
    }
    ?>
  </div>
</section>

<section class="container" aria-labelledby="about-title">
  <h2 id="about-title" class="section-title"><?php esc_html_e( 'About Our Restaurant', 'restaurant' ); ?></h2>
  <div class="hero" style="padding-top: 0;">
    <div class="copy">
      <p><?php esc_html_e( 'Rooted in tradition and elevated with modern techniques, our kitchen crafts dishes that celebrate the seasons and the richness of local ingredients.', 'restaurant' ); ?></p>
      <a class="btn btn-primary" href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>"><?php esc_html_e( 'Our Story', 'restaurant' ); ?></a>
    </div>
    <div class="media">
      <img src="<?php echo esc_url( RESTAURANT_URI . '/assets/images/about.svg' ); ?>" alt="<?php esc_attr_e( 'Restaurant interior', 'restaurant' ); ?>">
    </div>
  </div>
</section>

<section class="container" aria-labelledby="testimonials-title">
  <h2 id="testimonials-title" class="section-title"><?php esc_html_e( 'What Our Guests Say', 'restaurant' ); ?></h2>
  <div class="grid">
    <?php
    $testimonials = [
      [ 'quote' => 'Absolutely unforgettable dining experience!', 'name' => 'Ava M.' ],
      [ 'quote' => 'The flavors were vibrant and perfectly balanced.', 'name' => 'Noah R.' ],
      [ 'quote' => 'Beautiful ambience and impeccable service.', 'name' => 'Liam K.' ],
    ];
    foreach ( $testimonials as $t ) {
      set_query_var( 'restaurant_testimonial', $t );
      get_template_part( 'template-parts/testimonial' );
    }
    ?>
  </div>
</section>

<section class="container" aria-labelledby="reservation-title">
  <h2 id="reservation-title" class="section-title"><?php esc_html_e( 'Ready to Dine?', 'restaurant' ); ?></h2>
  <?php get_template_part( 'template-parts/cta' ); ?>
</section>

<?php get_footer();


