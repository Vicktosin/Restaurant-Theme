<?php
/**
 * CTA block
 *
 * @package restaurant
 */
?>
<div class="card" style="grid-column: 1 / -1; text-align:center; padding-bottom: 12px;">
  <div class="content">
    <h3><?php esc_html_e( 'Reserve Your Table Today', 'restaurant' ); ?></h3>
    <p><?php esc_html_e( 'Experience seasonal flavors in an elegant setting.', 'restaurant' ); ?></p>
    <a class="btn btn-primary" href="<?php echo esc_url( get_permalink( get_page_by_path( 'reservations' ) ) ); ?>"><?php esc_html_e( 'Make a Reservation', 'restaurant' ); ?></a>
  </div>
</div>


