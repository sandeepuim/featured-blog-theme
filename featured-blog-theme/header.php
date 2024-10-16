<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'featured-blog-bootstrap-theme' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'         => false,
                    'menu_class'        => 'navbar-nav ms-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
        </div>
    </nav>
