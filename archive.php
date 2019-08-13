<?php
get_header();
?>

<?php
if (have_posts()) :
	?>

<!-- Titolo pagina -->
<h1 class="pb-2">
	<?php get_template_part('inc/get_page_title'); ?>
</h1>
<!-- /Titolo pagina -->

<!-- Contenuto pagina -->
<?php
	//Loop tra i post
	while (have_posts()) : the_post();
		?>

<?php get_template_part('inc/get_article_in_list'); ?>

<?php
	endwhile;
	?>

<!-- Numeri pagina -->
<div class="pagination">
	<?php echo paginate_links();?>
</div>
<!-- /Numeri pagina -->

<?php
else :
	echo '<p>Nessun articolo...</p>';

endif;
?>
<!-- /Contenuto pagina -->

<?php
get_footer();
?>