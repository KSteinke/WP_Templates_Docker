<header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <p><?php bloginfo( 'description' ); ?></p>
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
</header>