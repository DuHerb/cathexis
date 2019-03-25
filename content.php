
<!-- content.php -->
<div class="sticky-border">
      <img class="arrow-tip arrow-tip-left" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
      <p class="border-button border-button-back">back</p>
      <h3 class="invisible">hidden title</h3>
      <img class="arrow-tip arrow-tip-right" src="<?php bloginfo('stylesheet_directory'); ?>/images/cnwp_trans_tip.png">
      <p class="border-button border-button-btt button-fade">top</p>
</div><!-- .sticky-border -->
<article class="poem">
      <h3 class="poem-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p class="poem-author"><?php the_field('poet_name') ?></p>
      <div class="poem-text"><?php the_content(); ?></div>
      <?php if(get_field('poet_bio')) { ?>
      <p class="bio-line"><?php echo the_field('poet_bio') ?></p>
      <?php } ?>
</article><!-- .poem -->

