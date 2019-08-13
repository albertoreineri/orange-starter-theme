<article class="mb-5">

    <!-- Titolo -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!-- /Titolo -->

    <!-- Immagine -->
    <div class="post-thumbnail pb-2">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('banner-thumbnail'); ?></a>
    </div>
    <!-- /Immagine -->

    <!-- Post info -->
    <p class="post-info">
        <?php the_time('j F Y - g:i a'); ?> |
        Autore: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
        Categoria:
        <!-- Categoria -->
        <?php get_template_part('inc/get_category'); ?>
        <!-- /Categoria -->
    </p>
    <!-- /Post info -->

    <!-- Excerpt -->
    <p class="excerpt">
        <a href="<?php the_permalink(); ?>">
            <?php echo get_the_excerpt(); ?>
        </a>
    </p>
    <!-- /Excerpt -->

    <!-- Continua a leggere -->
    <div class="readmore">
        <a href="<?php the_permalink(); ?>">Continua a leggere &raquo;</a>
    </div>
    <!-- /Continua a leggere -->

</article>