<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1>
            <?php bloginfo( 'name' ); ?>
        </h1>
        <p>
            <?php bloginfo( 'description' ); ?>
        </p>
        <nav>
            <?php wp_nav_menu( 
                array( 
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '%3$s'
                    ) ); 
            ?>
        </nav>
    </header>