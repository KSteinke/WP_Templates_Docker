<?php get_header(); ?>
    <!-- this is a landing page site -->
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) 
            {
                the_post();
                the_content();
                the_post_thumbnail();
            }
        }
    ?>
<?php get_footer(); ?>