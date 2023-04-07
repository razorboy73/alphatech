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


function university_post_types()
{
    $labels = array(
        'name' => _x('events', 'Post Type General Name', 'alpha-tech'),
        'singular_name' => _x('Event', 'Post Type Singular Name', 'alpha-tech'),
        'menu_name' => _x('Events', 'Admin Menu text', 'alpha-tech'),
        'name_admin_bar' => _x('Event', 'Add New on Toolbar', 'alpha-tech'),
        'archives' => __('Event Archives', 'alpha-tech'),
        'attributes' => __('Event Attributes', 'alpha-tech'),
        'parent_item_colon' => __('Parent Event:', 'alpha-tech'),
        'all_items' => __('All events', 'alpha-tech'),
        'add_new_item' => __('Add New Event', 'alpha-tech'),
        'add_new' => __('Add New', 'alpha-tech'),
        'new_item' => __('New Event', 'alpha-tech'),
        'edit_item' => __('Edit Event', 'alpha-tech'),
        'update_item' => __('Update Event', 'alpha-tech'),
        'view_item' => __('View Event', 'alpha-tech'),
        'view_items' => __('View events', 'alpha-tech'),
        'search_items' => __('Search Event', 'alpha-tech'),
        'not_found' => __('Not found', 'alpha-tech'),
        'not_found_in_trash' => __('Not found in Trash', 'alpha-tech'),
        'featured_image' => __('Featured Image', 'alpha-tech'),
        'set_featured_image' => __('Set featured image', 'alpha-tech'),
        'remove_featured_image' => __('Remove featured image', 'alpha-tech'),
        'use_featured_image' => __('Use as featured image', 'alpha-tech'),
        'insert_into_item' => __('Insert into Event', 'alpha-tech'),
        'uploaded_to_this_item' => __('Uploaded to this Event', 'alpha-tech'),
        'items_list' => __('events list', 'alpha-tech'),
        'items_list_navigation' => __('events list navigation', 'alpha-tech'),
        'filter_items_list' => __('Filter events list', 'alpha-tech'),
    );
    $args = array(

        'description' => __('Event listings', 'alpha-tech'),
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
    );
    register_post_type('event', $args);
}

add_action('init', 'university_post_types');
