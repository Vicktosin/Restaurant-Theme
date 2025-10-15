<?php
/**
 * Search form template
 *
 * @package restaurant
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="sr-only" for="s"><?php esc_html_e( 'Search for:', 'restaurant' ); ?></label>
  <input type="search" id="s" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'restaurant' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  <button type="submit" class="btn btn-outline"><?php echo esc_html_x( 'Search', 'submit button', 'restaurant' ); ?></button>
</form>


