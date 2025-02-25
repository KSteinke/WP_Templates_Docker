<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
    <!--
    <header>
        
        <h1>
            
            <?php /*bloginfo( 'name' ); ?>
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
            */?>
        </nav>
                
    </header> -->

<header>
    <nav class="fixed-menu" id="menu">
        <div class="hamburger" id="menuToggle">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="desktop-menu">
            <li class="header_nav"><?php echo get_bloginfo('name');?></li>
            <?php wp_nav_menu( 
                    array( 
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '%3$s'
                        ) ); 
            ?>
        </ul>
        <div class="nav_end">
            <div>Dupa asdsadasdsaas</div> 
            <div>Dupa</div>
        </div>
    </nav>
</header>


<div class="mobile-menu" id="mobileMenu">
    <ul>
        <li><a href="#">Strona główna</a></li>
        <li><a href="#">O nas</a></li>
        <li><a href="#">Kontakt</a></li>
    </ul>
</div>


