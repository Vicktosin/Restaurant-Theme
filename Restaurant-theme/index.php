<?php
/**
 * Main index template (fallback)
 *
 * @package restaurant
 */

get_header(); ?>

<div class="container">
  <div class="grid" style="grid-template-columns: repeat(12, 1fr); gap: 24px;">
    <div style="grid-column: span 8;">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
          <?php endif; ?>
          <div class="content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="meta" style="color:#777; font-size:14px; margin-bottom:8px;">
              <?php echo esc_html( get_the_date() ); ?>
            </div>
            <div class="excerpt"><?php the_excerpt(); ?></div>
          </div>
        </article>
      <?php endwhile; else : ?>
        <p><?php esc_html_e( 'No posts found.', 'restaurant' ); ?></p>
      <?php endif; ?>

      <div class="pagination">
        <?php the_posts_pagination(); ?>
      </div>
    </div>
    <div style="grid-column: span 4;">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer();


