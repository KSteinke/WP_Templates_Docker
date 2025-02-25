<?php
/**
 * Template Name: Custom Page Template
 */
?>

<?php get_header(); ?>

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


<?php get_footer(); ?>