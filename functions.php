<?php



/**
 * Proper way to enqueue scripts and styles.
 */
function alphatech_files()
{
    wp_enqueue_script('main-alpha', get_theme_file_uri('/build/index.js'), ['jquery'], 1, true);
    wp_enqueue_style('alphatech_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('alphatech_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/font-awesome/font-awesome.min.css', array(), '4.7.0', true));
    //wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'alphatech_files');


function theme_infrastructure()
{
    //register mutliple menus
    register_nav_menus(array(
        'headerMenuLocation' => 'Test Header Menu',
        'footerMenuLocationOne' => 'Footer Location One Menu',
        'footerMenuLocationTwo' => 'Footer Location Two Menu'

    ));

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'theme_infrastructure');


function university_adjust_queries($query)


{
    //not in the admin interface
    if (!is_admin() and is_post_type_archive('program') and is_main_query()) {

        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }
    if (!is_admin() and is_post_type_archive('event')) {
        $today = date("Ymd");
        $query->set('meta_key', 'event_date');
        $query->set('order_by', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'

            )
        ));
    }
}

add_action('pre_get_posts', 'university_adjust_queries');
