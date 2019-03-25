<!-- index.php -->
<?php get_header(); ?>

<main>
    <section class="banner">
        <h3 class="banner-head"><?php echo get_option('banner-header'); ?></h3>
        <p class="banner-text"><?php echo get_option('banner'); ?></p>
    </section><!-- .banner -->
    <section class="previews">
        <div class="sticky-border">
            <img class="arrow-tip arrow-tip-left" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
            <p class="border-button border-button-back">back</p>
            <h3>featured</h3>
            <img class="arrow-tip arrow-tip-right" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
            <p class="border-button border-button-btt button-fade">top</p>
        </div><!-- .sticky-border -->

        <?php
        $args = array('cat' => 7, 'orderby' => 'title', 'order' => 'asc');
        $front_page_query = new WP_Query($args);
        if ($front_page_query->have_posts()) {
            while($front_page_query->have_posts()) {
                $front_page_query->the_post();
                get_template_part('content', 'front_page');
            }
        }
        wp_reset_postdata();
        ?>
    </section><!-- .previews -->
</main>
<?php get_footer(); ?>