<?php
function hook_css()
{
    echo "hooked in the head";
}
add_action('wp_head', 'hook_css');


/**
 * Proper way to enqueue scripts and styles.
 */
function alphatech_files()
{
    wp_enqueue_style('alphatech_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('alphatech_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/css/font-awesome/font-awesome.min.css', array(), '4.7.0', true));
    //wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'alphatech_files');
