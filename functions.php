<?php
add_theme_support('post-thumbnails');

function getPostImageUrlOrDefault($post)
{
    $tryGetPostImg = get_the_post_thumbnail_url($post);

    if ($tryGetPostImg === false) {
        return get_template_directory_uri()
            . DIRECTORY_SEPARATOR
            . 'assets'
            . DIRECTORY_SEPARATOR
            . 'images'
            . DIRECTORY_SEPARATOR
            . 'image_not_available.png';
    }

    return $tryGetPostImg;
}


function registerMenu()
{
    register_nav_menu('main-menu', 'Main Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
}

add_action('init', 'registerMenu');


function registerSidebar()
{
    $options = [
        'id' => 'sidebar',
        'name' => 'Sidebar',
        'description' => 'This is right sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ];

    register_sidebar($options);
}

add_action('widgets_init', 'registerSidebar');


function reigisterAdminMenu()
{
    add_menu_page(
        'Theme settings',
        'Theme settings',
        'manage_options',
        'theme-settings',
        'showThemeSettings',
        'dashicons-cover-image',
        50
    );
}

function showThemeSettings()
{
    include 'views' . DIRECTORY_SEPARATOR . 'theme-settings.php';
}

add_action('admin_menu', 'reigisterAdminMenu');


function registerThemeOptions()
{
    register_setting('hpg', 'hp_company');
    register_setting('hpg', 'hp_heading');
    register_setting('hpg', 'hp_sub_heading');
    register_setting('hpg', 'hp_button');
}

add_action('admin_init', 'registerThemeOptions');
