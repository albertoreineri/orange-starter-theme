<?php
get_header();
?>
			
<?php
if (have_posts()) :

	while (have_posts()) : the_post();

		get_template_part('inc/get_single');

	endwhile;

else :

	echo '<p>Nessuna pagina trovata...</p>';

endif;
?>

<?php
get_footer();
?>