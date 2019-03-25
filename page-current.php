<!-- File Name: page-current.php -->

<?php get_header(); ?>
<main>
  <div class="sticky-border">
      <img class="arrow-tip arrow-tip-left" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
      <p class="border-button border-button-back">back</p>
      <h3 class="sticky-title fade">current</h3>
      <img class="arrow-tip arrow-tip-right" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
      <p class="border-button border-button-btt button-fade">top</p>
  </div><!-- .sticky-border -->
  <section class="archive-page">
    <?php
      $args = array('category_name' => 'current', 'order' => 'asc', 'orderby' => 'title');
      $current_query = new WP_Query($args);

      if ($current_query->have_posts()) {
        while($current_query->have_posts()) {
          $current_query->the_post();
          get_template_part('content', 'archive');
          }
        }
    wp_reset_postdata();
    ?>
  </section><!-- .archive-page -->
</main>
<?php get_footer(); ?>