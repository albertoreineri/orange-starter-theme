<article class="post">
    <!-- Titolo -->
    <h2><?php the_title(); ?></h2>
    <!-- Titolo -->

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

    <!-- Immagine -->
    <?php the_post_thumbnail('banner-thumbnail'); ?>
    <!-- /Immagine -->

    <!-- Contenuto -->
    <?php the_content(); ?>
    <!-- /Contenuto -->

    <!-- Tags -->
    <div class="tags">
        <?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach ($posttags as $tag) {
                echo $tag->name . ' ';
            }
        }
        ?>
    </div>
    <!-- /Tags -->

    <!-- Commenti -->
    <?php comments_template(); ?>
    <!-- /Commenti -->

</article>