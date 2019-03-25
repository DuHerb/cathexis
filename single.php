<!-- single.php -->
  <?php get_header(); ?>

<main>
  <section class="full-width">
    <?php
      if (have_posts()) : while (have_posts()) : the_post();
            get_template_part('content', get_post_format());
      endwhile;?>
   <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>