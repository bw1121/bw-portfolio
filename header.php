<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Raleway:wght@700&display=swap" rel="stylesheet">

        <title><?php bloginfo('name'); ?></title>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- HEADER -->
        <header>
                <!-- NAVIGATION -->
                <div class="container sticky-top" id="nav">
                    <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                        <!-- LOGO -->
                        <div class="navbar-brand">
                            <?php 
                                // Display logo if it's set; if not, display site title
                                if(get_header_image() == ''){ ?>
                                    <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                                <?php } else { ?>
                                    <a href="<?php get_home_url(); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo"></a>
                            <?php } ?>
                        </div>
                        
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- MENU ITEMS --> 
                        <div class="menu-items">
                            <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'main-menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                        </div>
                    </nav>
                </div><!-- #nav -->
            </header>


