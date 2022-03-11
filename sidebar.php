<div class="sidebar mt-5 mt-lg-0">
	<div class="widget-item">
		<?php get_template_part('searchform'); ?>
	</div>
	
	<?php
	if (is_active_sidebar('sidebar1')) :

		dynamic_sidebar('sidebar1');

	endif;
	?>
</div>