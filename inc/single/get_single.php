<article class="post">

    <h2><?php the_title(); ?></h2>
    
    <?php get_template_part('inc/single/get_info'); ?>

    <div class="single-post-image">
        <?php the_post_thumbnail('banner-thumbnail'); ?>
    </div>

    <div class="single-post-content">
        <?php the_content(); ?>
    </div>

    <div class="tags">
        <?php get_template_part('inc/single/get_tags_list'); ?>
    </div>

    <div class="single-post-comments">
        <?php comments_template(); ?>
    </div>

</article>