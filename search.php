<?php get_header(); ?>
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-9">
			<h1>Ricerca per <?php the_search_query(); ?>:</h1>
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					get_template_part('inc/archive/get_article');
				endwhile;
			else :
				echo '<p>Nessun articolo trovato...</p>';
			endif;
			?>
		</div>

		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>