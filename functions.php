<?php

/* CSS e JS */
function orange_starter_theme_resources()
{
	//CSS
	wp_enqueue_style('font-a', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', '', '', 'all');
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('style', get_stylesheet_uri());

	//JS
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', '', '', true);
	wp_enqueue_script('my-scripts', get_template_directory_uri() . '/assets/js/main.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'orange_starter_theme_resources');

// Theme setup
function orange_starter_theme_setup()
{
	// Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'orange-starter-theme'),
		'footer' => __('Footer Menu', 'orange-starter-theme'),
	));

	// Aggiungo dimensioni immagini custom
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-thumbnail', 920, 400, true);
}
add_action('after_setup_theme', 'orange_starter_theme_setup');

// Aggiungo Widget
function ourWidgetsInit()
{

	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}

add_action('widgets_init', 'ourWidgetsInit');

// Lunghezza excerpt 
function custom_excerpt_length()
{
	return 150;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// Custom Walker Class per menù Bootstrap
add_action('after_setup_theme', 'bootstrap_setup');
if (!function_exists('bootstrap_setup')) :

	function bootstrap_setup()
	{

		class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu
		{

			function start_lvl(&$output, $depth = 0, $args = array())
			{

				$indent = str_repeat("\t", $depth);
				$output    .= "\n$indent<ul class=\"dropdown-menu\">\n";
			}

			function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
			{

				$indent = ($depth) ? str_repeat("\t", $depth) : '';

				$li_attributes = '';
				$class_names = $value = '';

				$classes = empty($item->classes) ? array() : (array) $item->classes;
				$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
				$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
				$classes[] = 'menu-item-' . $item->ID;
				$classes[] = 'nav-item';


				$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
				$class_names = ' class="' . esc_attr($class_names) . '"';

				$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
				$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

				$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

				$attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
				$attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
				$attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
				$attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
				$attributes .= ($args->walker->has_children)      ? ' class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : 'class="nav-link"';

				$item_output = $args->before;
				$item_output .= ($depth > 0) ? '<a class="dropdown-item"' . $attributes . '> ' : '<a' . $attributes . '>';
				$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;

				$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
			}
		}
	}

endif;
