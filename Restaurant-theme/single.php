<?php
/**
 * Single post template
 *
 * @package restaurant
 */

get_header(); ?>

<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <div class="meta" style="color:#777; font-size:14px; margin-bottom:16px;">
        <?php echo esc_html( get_the_date() ); ?>
      </div>
      <?php if ( has_post_thumbnail() ) : ?>
        <div style="margin-bottom:16px;"><?php the_post_thumbnail( 'large' ); ?></div>
      <?php endif; ?>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php comments_template(); ?>
  <?php endwhile; endif; ?>
</div>

<?php get_footer();


