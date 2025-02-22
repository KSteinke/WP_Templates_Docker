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