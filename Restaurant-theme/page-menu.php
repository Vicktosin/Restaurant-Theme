<?php
/**
 * Menu page template
 * Template Name: Menu Page
 *
 * @package restaurant
 */

get_header(); ?>

<div class="container">
  <h1><?php the_title(); ?></h1>

  <?php
  $sections = [
    'Appetizers' => [
      [ 'title' => 'Bruschetta', 'price' => '$8', 'desc' => 'Grilled bread, tomatoes, basil, olive oil.' ],
      [ 'title' => 'Stuffed Mushrooms', 'price' => '$9', 'desc' => 'Herbed cheese, garlic, breadcrumbs.' ],
    ],
    'Mains' => [
      [ 'title' => 'Ribeye Steak', 'price' => '$32', 'desc' => '12oz, herb butter, roasted potatoes.' ],
      [ 'title' => 'Lobster Risotto', 'price' => '$28', 'desc' => 'Creamy arborio rice, fresh lobster, parmesan.' ],
    ],
    'Desserts' => [
      [ 'title' => 'Panna Cotta', 'price' => '$10', 'desc' => 'Vanilla bean, berry coulis.' ],
      [ 'title' => 'Chocolate Lava Cake', 'price' => '$11', 'desc' => 'Warm center, vanilla gelato.' ],
    ],
    'Drinks' => [
      [ 'title' => 'House Red', 'price' => '$9', 'desc' => 'Glass, full-bodied, notes of cherry.' ],
      [ 'title' => 'Signature Cocktail', 'price' => '$12', 'desc' => 'Seasonal fruits, herbs, spirits.' ],
    ],
  ];

  foreach ( $sections as $section_title => $items ) : ?>
    <section>
      <h2 class="section-title" style="text-align:left;"><?php echo esc_html( $section_title ); ?></h2>
      <div class="grid">
        <?php foreach ( $items as $item ) :
          set_query_var( 'restaurant_card', [
            'title' => $item['title'],
            'price' => $item['price'],
            'img'   => '',
            'desc'  => $item['desc'],
          ] );
          get_template_part( 'template-parts/menu', 'card' );
        endforeach; ?>
      </div>
    </section>
  <?php endforeach; ?>
</div>

<?php get_footer();


