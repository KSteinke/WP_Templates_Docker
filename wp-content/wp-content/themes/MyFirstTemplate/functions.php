<?php

function mytemplate_register_styles()
{
    wp_enqueue_style('my_template_style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

//Enqueue mytemplate_register_styles function with wp_enqueue_scripts
add_action(hook_name: 'wp_enqueue_scripts', callback: 'mytemplate_register_styles');

?>