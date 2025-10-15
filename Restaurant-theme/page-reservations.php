<?php
/**
 * Reservations page template
 * Template Name: Reservations Page
 *
 * @package restaurant
 */

get_header(); ?>

<div class="container">
  <h1><?php the_title(); ?></h1>

  <form class="card" style="grid-column:1 / -1;">
    <div class="content">
      <div class="grid" style="grid-template-columns: repeat(12, 1fr); gap: 16px;">
        <div style="grid-column: span 6;">
          <label for="res_name"><?php esc_html_e( 'Name', 'restaurant' ); ?></label>
          <input id="res_name" type="text" required style="width:100%; padding:12px; border-radius:10px; border:1px solid #ddd;">
        </div>
        <div style="grid-column: span 6;">
          <label for="res_email"><?php esc_html_e( 'Email', 'restaurant' ); ?></label>
          <input id="res_email" type="email" required style="width:100%; padding:12px; border-radius:10px; border:1px solid #ddd;">
        </div>
        <div style="grid-column: span 4;">
          <label for="res_date"><?php esc_html_e( 'Date', 'restaurant' ); ?></label>
          <input id="res_date" type="date" required style="width:100%; padding:12px; border-radius:10px; border:1px solid #ddd;">
        </div>
        <div style="grid-column: span 4;">
          <label for="res_time"><?php esc_html_e( 'Time', 'restaurant' ); ?></label>
          <input id="res_time" type="time" required style="width:100%; padding:12px; border-radius:10px; border:1px solid #ddd;">
        </div>
        <div style="grid-column: span 4;">
          <label for="res_party"><?php esc_html_e( 'Party Size', 'restaurant' ); ?></label>
          <input id="res_party" type="number" min="1" max="12" value="2" required style="width:100%; padding:12px; border-radius:10px; border:1px solid #ddd;">
        </div>
        <div style="grid-column: span 12;">
          <label for="res_notes"><?php esc_html_e( 'Notes (optional)', 'restaurant' ); ?></label>
          <textarea id="res_notes" rows="4" style="width:100%; padding:12px; border-radius:10px; border:1px solid #ddd;"></textarea>
        </div>
      </div>
      <div style="margin-top:16px;">
        <button type="submit" class="btn btn-primary"><?php esc_html_e( 'Submit Reservation', 'restaurant' ); ?></button>
      </div>
    </div>
  </form>
  <p style="margin-top:8px; color:#666;"><?php esc_html_e( 'This form is a demo placeholder and does not submit.', 'restaurant' ); ?></p>
</div>

<?php get_footer();


