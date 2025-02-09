
<?php get_header(); ?>
<body>
    <!-- this is a landing page site -->
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) 
        {
            the_post();
            the_content();
        }
    }
    ?>
    
</body>
<?php wp_head(); ?>
<?php get_footer(); ?>
</html>