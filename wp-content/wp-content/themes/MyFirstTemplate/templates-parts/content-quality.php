<div class="container_content">
    <div>
        <div class="header_post_small">
            <?php echo get_the_title();?>
        </div>
        <div class="text_post-small">
            <?php echo get_the_content();?>
        </div>
    </div>
    <img class="img_post-xl" src="<?php echo get_the_post_thumbnail_url(); ?>">
</div>
