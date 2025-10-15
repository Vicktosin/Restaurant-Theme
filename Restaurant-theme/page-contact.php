<?php
/**
 * Contact page template
 * Template Name: Contact Page
 *
 * @package restaurant
 */

get_header(); ?>

<div class="container">
  <h1><?php the_title(); ?></h1>
  <div class="grid" style="grid-template-columns: repeat(12, 1fr); gap: 24px;">
    <div style="grid-column: span 6;">
      <h2><?php esc_html_e( 'Visit Us', 'restaurant' ); ?></h2>
      <p>123 Market Street<br>Hometown, USA</p>
      <p><strong><?php esc_html_e( 'Phone', 'restaurant' ); ?>:</strong> (555) 123-4567<br>
      <strong><?php esc_html_e( 'Email', 'restaurant' ); ?>:</strong> hello@example.com</p>
      <h3><?php esc_html_e( 'Hours', 'restaurant' ); ?></h3>
      <p><?php esc_html_e( 'Mon–Thu 11am–9pm, Fri–Sat 11am–10pm, Sun 11am–8pm', 'restaurant' ); ?></p>
    </div>
    <div style="grid-column: span 6;">
      <div style="position:relative; padding-bottom:56.25%; height:0; overflow:hidden; border-radius: 12px; box-shadow: var(--shadow-soft);">
        <iframe title="Map" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.15%2C51.5%2C-0.1%2C51.52&amp;layer=mapnik" style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>

<?php get_footer();


