<?php get_header(); ?>
    <!-- This is a landing page site -->


    <!-- Landing Page Top Section -->
<div>  
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) 
            {
                the_post();
                get_template_part('templates-parts/content', 'landing-hero');
            }
        }
    ?>
</div>


<!-- About Us Page Top Section -->
<?php
    $latest_posts = get_posts(array(
        'post_type'     => 'post',  
        'category_name' => 'ONas',  // Filtruje tylko posty z kategorii "Nic"
        'numberposts'   => 1        // Pobiera tylko jeden post
    ));
?>
<div class="container">
    <div class="container_content">
        <?php
            foreach ($latest_posts as $post) :
                setup_postdata($post);
                // Załadowanie szablonu content-article.php
                get_template_part('templates-parts/content', 'aboutus');
            endforeach;

            // Reset globalnego obiektu posta
            wp_reset_postdata();
        ?>
    </div>
</div>


<!-- Services Page Top Section -->
<?php
    $category = 'Usługi';
    $latest_posts = get_posts(array(
        'post_type'     => 'post',  
        'category_name' => $category,  // Filtruje tylko posty z kategorii "Nic"
        'numberposts'   => 3,       // Pobiera tylko jeden post
        'orderby'        => 'date',  // Kryterium sortowania (np. date, title, rand)
        'order'          => 'DESC'   // Kolejność (ASC – rosnąco, DESC – malejąco)
    ));
?>
<div class="container_black">
    <div class="header_post_center">
        <?php echo $category ?>
    </div>
    <?php
        foreach ($latest_posts as $post) :
            setup_postdata($post);
            // Załadowanie szablonu content-article.php
            get_template_part('templates-parts/content', 'services');
        endforeach;

        // Reset globalnego obiektu posta
        wp_reset_postdata();
    ?>
</div>


<!-- Gallery section -->
<?php
    $latest_posts = get_posts(array(
        'post_type'     => 'post',  
        'category_name' => 'Gallery',  // Filter posts by the category
    ));
?>
<div class="container">
    <?php
        foreach ($latest_posts as $post) :
            setup_postdata($post);
            // Załadowanie szablonu content-gallery.php
            get_template_part('templates-parts/content', 'gallery');
        endforeach;

        // Reset globalnego obiektu posta
        wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
