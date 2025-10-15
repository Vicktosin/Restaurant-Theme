<?php
/**
 * 404 template
 *
 * @package restaurant
 */

get_header(); ?>

<div class="container" style="text-align:center; padding: 60px 0;">
  <h1><?php esc_html_e( 'Page not found', 'restaurant' ); ?></h1>
  <p><?php esc_html_e( 'We can’t find the page you’re looking for.', 'restaurant' ); ?></p>
  <?php get_search_form(); ?>
  <p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'restaurant' ); ?></a></p>
  
</div>

<?php get_footer();


