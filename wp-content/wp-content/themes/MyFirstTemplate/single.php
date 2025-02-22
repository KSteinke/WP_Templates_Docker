<?php get_header(); ?>
    <!-- this is a landing page site -->
    
    <?php 
    /*
        if ( have_posts() ) {
            while ( have_posts() ) 
            {
                the_post();
                the_content();
            }
        }
            */
    ?>

    <div class="container_post">
        <img class="img_post" src="<?php echo get_the_post_thumbnail_url(); ?>">
        <div>
            <div class="header_post">
                <?php echo get_the_title();?>
            </div>
            <div class="text_post">
                <?php echo get_the_content();?>
            </div>
        </div>
    </div>



    <?php
        $post_id = get_the_ID();
        $categories = get_the_category($post_id);
        foreach ($categories as $category) {
            echo '<p>Kategoria: ' . esc_html($category->slug) . '</p>';
        }
        $category = get_queried_object();
        ?>
        <?php
$post_type = get_post_type();
echo 'Typ posta: ' . esc_html($post_type);
?>

        

<?php get_footer(); ?>

<?php echo 'Załadowano plik: ' . basename(__FILE__); ?>