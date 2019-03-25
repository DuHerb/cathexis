<!-- archive.php -->

<?php get_header(); ?>

<main class="archive-page">
    <div class="sticky-border">
        <img class="arrow-tip arrow-tip-left" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
        <p class="border-button border-button-back">back</p>
        <h3 class="archive-page-title sticky-title fade">archive</h3>
        <img class="arrow-tip arrow-tip-right" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
        <p class="border-button border-button-btt button-fade">top</p>
    </div><!-- .sticky-border -->
    <section class="category-list">
        <?php
        $args = array (
            'child_of' => 3,
            'style' => 'list',
            'title_li' => '',
            'exclude' => '9'
        );
        wp_list_categories($args);
        ?>
    </section><!-- .category-list -->
</main><!-- .archive-page -->

<?php get_footer(); ?>