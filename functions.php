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
    wp_enqueue_style('alphatech_main_styles', get_stylesheet_uri());
    //wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'alphatech_files');
