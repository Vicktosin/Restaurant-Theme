<?php
/**
 * Testimonial card component
 *
 * @package restaurant
 */

$t = get_query_var( 'restaurant_testimonial' );
if ( empty( $t ) || ! is_array( $t ) ) {
  return;
}
?>
<blockquote class="card" style="padding:0;">
  <div class="content">
    <p style="font-style: italic;">“<?php echo esc_html( $t['quote'] ); ?>”</p>
    <cite style="display:block; margin-top:8px; color:#666;">— <?php echo esc_html( $t['name'] ); ?></cite>
  </div>
</blockquote>


