<?php
get_header();
?>

<!-- Titolo pagina -->
<h2>
	Ricerca per <?php the_search_query(); ?>:
</h2>
<!-- /Titolo pagina -->

<?php
if (have_posts()) :
	?>

<!-- Contenuto pagina -->
<?php
	//Loop tra i post
	while (have_posts()) : the_post();
		?>

<?php get_template_part('inc/get_article_in_list'); ?>

<?php
	endwhile;

else :
	echo '<p>Nessun articolo trovato...</p>';

endif;
?>
<!-- /Contenuto pagina -->

<?php
get_footer();
?>