<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
    <div id="page">
        <header>
            <nav>
                <div class="navbar">
                    <div class="site-identity">
                        <a href="<?php echo get_home_url(); ?>">
                            <h2><?php echo get_bloginfo( 'name' ); ?></h2>
                        </a>
                        <a href="<?php echo get_home_url(); ?>">
                            <h5>
                                <?php echo get_bloginfo( 'description' ); ?>
                            </h5>
                        </a>
                    </div>
                    <div class="right">
                        <?php

                        if( has_nav_menu( 'primary' ) ){
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'menu hide',
                                'fallback_cb' => false,
                                'depth' => 2
                            ]);
                        }

                        ?>
                    </div>
                </div>
            </nav>
        </header>