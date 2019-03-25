<!-- archive.php -->

<?php get_header(); ?>

<main>
  <div class="sticky-border">
      <img class="arrow-tip arrow-tip-left" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
      <p class="border-button border-button-back">back</p>
      <h3 class="archive-page-title sticky-title fade"><?php single_cat_title(); ?></h3>
      <img class="arrow-tip arrow-tip-right" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
      <p class="border-button border-button-btt button-fade">top</p>
  </div><!-- .sticky-border -->
  <section class="archive-page">
    <?php
      if (have_posts()) : while (have_posts()) : the_post();

        get_template_part('content', 'archive');

      endwhile; endif;
    ?>
  </section><!-- .archive-page -->
</main>

<?php get_footer(); ?>