<?php

function mytemplate_register_styles()
{
    wp_enqueue_style('my_template_style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}
//Enqueue mytemplate_register_styles function with wp_enqueue_scripts
add_action(hook_name: 'wp_enqueue_scripts', callback: 'mytemplate_register_styles');


function mytemplate_theme_setup()
{
    // Adds dynamic titletag support, title of the page
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','mytemplate_theme_setup');


function mytemplate_menus()
{
    $locations = array(
        'primary' => "Primary menu",
        'footer' => "Footer menu"
    );
    register_nav_menus($locations);
}
add_action('init', 'mytemplate_menus')

?>