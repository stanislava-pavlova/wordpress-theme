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
    register_setting('hpg', 'hp_banner');
    register_setting('hpg', 'logo');
    register_setting('hpg', 'main_color');
    register_setting('hpg', 'header_text_color');
    register_setting('hpg', 'hp_subscr_sub_heading');
    register_setting('hpg', 'hp_subscr_heading');
}

add_action('admin_init', 'registerThemeOptions');

function custom_pagination()
{
    global $wp_query;

    $big = 999999999;

    $paginate = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('&laquo; Previous'),
        'next_text' => __('Next &raquo;'),
        'type' => 'array'
    ));

    if ($wp_query->max_num_pages > 1) :
?>
        <nav class="pagination" style="display: flex; justify-content: space-evenly; align-items: center;">
            <ul style="list-style: none; padding: 0; margin: 0; display: flex;">
                <?php foreach ($paginate as $page) {
                    echo '<li style="margin: 0 5px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;">' . $page . '</li>';
                } ?>
            </ul>
        </nav>

<?php
    endif;
}

function enqueue_contact_form_styles()
{
        wp_enqueue_style('contact-form-7');
}
add_action('wp_enqueue_scripts', 'enqueue_contact_form_styles');

function custom_contact_form_shortcode()
{
        ob_start();
        echo do_shortcode('[contact-form-7 id="6c90cef" title="Contact form 1"]');
        return ob_get_clean();
}
add_shortcode('custom_contact_form', 'custom_contact_form_shortcode');


add_action('admin_init', 'registerThemeOptions');
