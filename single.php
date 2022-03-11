<?php
get_header();
?>
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-9">
			<?php
			if (have_posts()) :
				while (have_posts()) : the_post();
					get_template_part('inc/single/get_single');
				endwhile;
			else :
				get_template_part('404');
			endif;
			?>
		</div>
		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
get_footer();
?>