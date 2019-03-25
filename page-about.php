<!-- page-about.php -->

<?php get_header(); ?>

<main>
    <div class="sticky-border">
        <img class="arrow-tip arrow-tip-left" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
        <p class="border-button border-button-back">back</p>
        <h3 class="archive-page-title sticky-title fade">about</h3>
        <img class="arrow-tip arrow-tip-right" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
        <p class="border-button border-button-btt button-fade">top</p>
    </div><!-- .sticky-border -->
    <div class="about">
        <?php
            if(have_posts()) : while(have_posts()) : the_post();
            endwhile; endif;
        ?>
        <p class="about-text"><?php the_content(); ?></p>
    </div><!-- .about -->
</main>

<?php get_footer(); ?>