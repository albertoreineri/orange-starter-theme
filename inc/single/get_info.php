<div class="post-info">
    <?php the_time('j F Y - g:i a'); ?> |
    Autore: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
    Categoria:
    <?php get_template_part('inc/single/get_current_category'); ?>
</div>