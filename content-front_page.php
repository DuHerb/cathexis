
<!-- content-front_page.php -->

<article class="poem">
    <h3 class="poem-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="poem-author"><?php the_field('poet_name') ?></p>
    <div class="poem-text"><?php the_content(); ?></div>
</article><!-- .poem -->