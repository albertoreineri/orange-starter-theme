<article class="mb-5">

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="post-thumbnail pb-2">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('banner-thumbnail'); ?></a>
    </div>

    <?php get_template_part('inc/single/get_info'); ?>

    <div class="excerpt">
        <a href="<?php the_permalink(); ?>">
            <?php echo get_the_excerpt(); ?>
        </a>
    </div>

    <div class="readmore">
        <a href="<?php the_permalink(); ?>">Continua a leggere &raquo;</a>
    </div>

</article>