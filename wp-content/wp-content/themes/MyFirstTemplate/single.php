<?php get_header(); ?>
    <!-- this is a landing page site -->
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) 
            {
                the_post();
                get_template_part('templates-parts/content', 'article');
            }
        }
    ?>
<?php get_footer(); ?>