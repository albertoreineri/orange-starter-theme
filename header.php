<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a id="button" href="#top" title="vai al top del sito">
        <i class="fas fa-chevron-up"></i>
    </a>

    <header class="mb-2">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <div class="container">
                <div class="navbar-brand" id="navbar-brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo get_bloginfo('name'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" width="50" class="brand-img" id="img-brand" alt="<?php echo get_bloginfo('name'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                        <p class="navbar-text brand" id="brand">
                            <?php echo get_bloginfo('name'); ?>
                        </p>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                    <?php
                    $args = array(
                        'theme_location' => 'primary',
                        'depth'      => 2,
                        'container' => false,
                        'menu_class' => 'navbar-nav ml-auto ulmenu',
                        'add_li_class'  => 'nav-item',
                        'link_class'   => 'nav-link',
                        'walker'     => new Bootstrap_Walker_Nav_Menu()
                    );
                    wp_nav_menu($args); ?>
                </div>
            </div>
        </nav>
    </header>

    <!-- Container principale -->
    <div class="container pt-3">
        <div class="row">
            <!-- Contenuto pagina: se è la home page non c'è la sidebar, altrimenti si -->
            <?php
            if (is_home()) {
                $col = "col-lg-12";
            } else {
                $col = "col-lg-9";
            }
            ?>
            <div class="<?php echo $col; ?>">