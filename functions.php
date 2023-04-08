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
}

add_action('after_setup_theme', 'theme_infrastructure');
