<div class="header_post_center">
    <?php echo get_the_title();?>
</div>
<?php
    $images = get_attached_media('image', get_the_ID());   
    $images = array_slice($images, 0, 6); // Takes only 4 attached media obj

    if ($images) {
        echo '<div class="container_content_gallery">';
        foreach ($images as $image) {
            $img_url = wp_get_attachment_image_url($image->ID, 'large');
            $post_url = get_permalink(); // Pobiera link do posta
            echo '<div class="gallery-item">';
                echo '<a href="' . esc_url($post_url) . '">'; // Link do posta
                    echo '<img src="' . esc_url($img_url) . '" alt="' . esc_attr(get_the_title($image->ID)) . '">';
                echo '</a>';
            echo '</div>';
        }
        echo '</div>';
    }
?>

<div class ="container_content">
    <a class="container_content" href="<?php the_permalink(); ?>">
        <button class="btn-text btn-text-xl btn btn-xl dropdown-shadow">Zobacz całą galerię</button>
    </a>
</div>