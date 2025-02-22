<?php get_header(); ?>
    <!-- this is a landing page site -->
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) 
            {
                the_post();
            }
        }
    ?>
<!-- Landing Page Top Section -->
<div id="landingpage-hero" class="landingpage-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <div class="landing-hero-call-to-action">
        <div class="title text-break text-landing-hero">
            <?php echo get_the_title()?>
        </div>
        <div class="subtitle">
            <?php echo get_the_excerpt();?>
        </div>
        <button class="btn-text btn dropdown-shadow">Wyceń zamówienie!</button>
    </div>
</div>

<!-- About Us Page Top Section -->
<div>
    <?php
        $latest_posts = get_posts(array(
            'post_type'     => 'post',  
            'category_name' => 'ONas',  // Filtruje tylko posty z kategorii "Nic"
            'numberposts'   => 1        // Pobiera tylko jeden post
        ));

        foreach ($latest_posts as $post) :
            setup_postdata($post);
            // Załadowanie szablonu content-article.php
            get_template_part('templates-parts/content', 'article');
        endforeach;

        // Reset globalnego obiektu posta
        wp_reset_postdata();
    ?>
</div>

<!-- Services Page Top Section -->
<div class="container_services">
    <div class="header_container">
        Usługi
    </div>
    <?php
        $latest_posts = get_posts(array(
            'post_type'     => 'post',  
            'category_name' => 'Usługi',  // Filtruje tylko posty z kategorii "Nic"
            'numberposts'   => 3,       // Pobiera tylko jeden post
            'orderby'        => 'date',  // Kryterium sortowania (np. date, title, rand)
            'order'          => 'DESC'   // Kolejność (ASC – rosnąco, DESC – malejąco)
        ));

        foreach ($latest_posts as $post) :
            setup_postdata($post);
            // Załadowanie szablonu content-article.php
            get_template_part('templates-parts/content', 'services');
        endforeach;

        // Reset globalnego obiektu posta
        wp_reset_postdata();
    ?>
</div>

<!-- Service gallery section -->
<div class="container_gallery">
    <?php
        $latest_posts = get_posts(array(
            'post_type'     => 'post',  
            'category_name' => 'Gallery',  // Filtruje tylko posty z kategorii "Nic"
        ));

        foreach ($latest_posts as $post) :
            setup_postdata($post);
            // Załadowanie szablonu content-article.php
            get_template_part('templates-parts/content', 'gallery');
        endforeach;

        // Reset globalnego obiektu posta
        wp_reset_postdata();
    ?>
</div>







<!-- <main class="container">
    <h2>Ostatnie wpisy</h2>
    <div class="post-list">
    
        <?php
        /*
        $latest_posts = get_posts(array(
            'numberposts' => 3,  // Pobiera 3 ostatnie posty
            'post_type'   => 'post',  // Tylko wpisy
            'category_name' => 'Nic'  // Filtruje tylko posty z kategorii "ONas"
        ));

        foreach ($latest_posts as $post) :
            setup_postdata($post);
        ?>
        
            <article class="post-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail($post->ID)) : ?>
                        <div class="post-thumbnail">
                            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                        </div>
                    <?php endif; ?>
                    <h3><?php echo get_the_title($post->ID); ?></h3>
                </a>
                <p class="post-excerpt"><?php echo get_the_excerpt($post->ID); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more">Czytaj więcej</a>
            </article>
        <?php

        
        endforeach;
        wp_reset_postdata();
        */
        ?>
    </div>
</main> -->


    
<?php get_footer(); ?>
