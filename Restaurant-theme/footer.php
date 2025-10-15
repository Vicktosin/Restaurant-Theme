<?php
/**
 * Footer template
 *
 * @package restaurant
 */
?>
  </main>
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="widgets">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div><?php dynamic_sidebar( 'footer-1' ); ?></div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div><?php dynamic_sidebar( 'footer-2' ); ?></div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div><?php dynamic_sidebar( 'footer-3' ); ?></div>
        <?php endif; ?>
      </div>

      <nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer', 'restaurant' ); ?>">
        <?php
          wp_nav_menu( [
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => 'menu',
            'fallback_cb'    => '__return_empty_string',
          ] );
        ?>
      </nav>

      <div class="legal">
        <small>&copy; <?php echo date_i18n( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'restaurant' ); ?></small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>


