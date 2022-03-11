<?php get_header(); ?>
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-9">
			<?php
			if (have_posts()) :
			?>
				<h1 class="archive-page-title pb-2"><?php get_template_part('inc/archive/get_title'); ?></h1>

				<?php
				while (have_posts()) : the_post();
					get_template_part('inc/archive/get_article');
				endwhile;
				?>

				<div class="pagination"><?php echo paginate_links(); ?></div>
			<?php
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