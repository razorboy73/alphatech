<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="preload" href="<?php echo get_theme_file_uri('/fonts/roboto-v30-latin-regular.woff2') ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_theme_file_uri('/fonts/roboto-v30-latin-300.woff2') ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_theme_file_uri('/fonts/roboto-condensed-v25-latin-300.woff2') ?>" as="font" type="font/woff2" crossorigin>

    <!-- roboto 400 - wp-content/themes/alphatech/fonts/roboto-v30-latin-regular.woff2
    roboto 300 - wp-content/themes/alphatech/fonts/roboto-v30-latin-300.woff2 -->
</head>


<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
                <a href="<?php echo site_url(); ?>"><strong>AlphaTech</strong> College</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <?php
                    /** 
                     * Lists associated pages.
                     */
                    wp_nav_menu(array(
                        'theme_location'    => 'headerMenuLocation', // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                    ));
                    ?>
                </nav>
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>