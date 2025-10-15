<?php
/**
 * Menu card component
 *
 * @package restaurant
 */

$card = get_query_var( 'restaurant_card' );
if ( empty( $card ) || ! is_array( $card ) ) {
  return;
}
?>
<article class="card">
  <?php if ( ! empty( $card['img'] ) ) : ?>
    <img src="<?php echo esc_url( $card['img'] ); ?>" alt="<?php echo esc_attr( $card['title'] ); ?>">
  <?php endif; ?>
  <div class="content">
    <h3><?php echo esc_html( $card['title'] ); ?></h3>
    <p><?php echo esc_html( $card['desc'] ); ?></p>
    <div class="price"><?php echo esc_html( $card['price'] ); ?></div>
  </div>
</article>


