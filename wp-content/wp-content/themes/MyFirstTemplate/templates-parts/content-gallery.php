<div class="header_post">
            <?php echo get_the_title();?>
        </div>
<?php
    $images = get_attached_media('image', get_the_ID());
    $images = array_slice($images, 0, 4); // Pobiera tylko pierwsze 4 obrazy

    if ($images) {
        echo '<div>';
        foreach ($images as $image) {
            $img_url = wp_get_attachment_image_url($image->ID, 'medium');
            echo '<img class="img_post_small" src="' . esc_url($img_url) . '" alt="' . esc_attr(get_the_title($image->ID)) . '">';
        }
        echo '</div>';
    }
?>

<a href="<?php the_permalink(); ?>" class="read-more-button">Czytaj więcej</a>