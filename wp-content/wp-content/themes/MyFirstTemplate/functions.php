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
add_action('init', 'mytemplate_menus');


//Widget registration, to be able to add custom widgets in different parts of the website
function mytemplate_widgets_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}

add_action('widgets_init', 'mytemplate_widgets_areas');




// New post type registration
/*
function custom_post_type() {

    $args = array(
        'labels' => array(
            'name'               => 'About Us', // Nazwa typu postu w liczbie mnogiej
            'singular_name'      => 'About Us',  // Nazwa typu postu w liczbie pojedynczej
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new post',
            'edit_item'          => 'Edit post',
            'new_item'           => 'New post',
            'view_item'          => 'View post',
            'search_items'       => 'Search post',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in trash',
            'all_items'          => 'All items',
            'menu_name'          => 'About Us',
            'name_admin_bar'     => 'About Us',
        ),
        'public'              => true, // Typ postu jest publiczny (widoczny na stronie)
        'has_archive'         => true, // Archiwum tego typu postu
        'show_ui'             => true, // Pokazywanie UI w panelu admina
        'show_in_menu'        => true, // Pokazywanie w menu admina
        'rewrite'             => array('slug' => 'aboutus'), // Ustawienie niestandardowego URL (np. /produkty)
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields'), // Czego oczekujesz od edytora (np. tytuł, treść, obrazek, itd.)
        'taxonomies'          => array('category', 'post_tag'), // Dodanie standardowych kategorii i tagów
        'menu_icon'           => 'dashicons-cart', // Ikona w menu (np. ikona koszyka)
    );
    
    register_post_type('aboutus', $args); // Rejestracja typu postu 'aboutus'
}

// Akcja rejestrująca typ postu
add_action('init', 'custom_post_type');
*/
?>