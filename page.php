<?php

/**
 * The template for displaying all pages
 *
 * @package alpha-tech
 *
 
 */

get_header();



while (have_posts()) {
    the_post(); ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/alpha-college-library.jpg') ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?> </h1>
            <div class="page-banner__intro">
                <p>Replace This</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">

        <?php
        //metabox code
        //page has a parent
        $theParent = wp_get_post_parent_id();


        if ($theParent) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div>
        <?php

        }
        ?>

        <!-- wnt to show this page if the page "has a parent" or "is a parent -->
        <?php
        //returns null if no childern for this post
        //rturns true of there are children
        $testForChildren = get_pages(
            array(
                'child_of' => get_the_ID()
            )
        );


        if ($theParent or $testForChildren) { ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php the_permalink($theParent); ?>"><?php
                                                                                            //get the parent title by passing it the $theParent
                                                                                            // if 0, means we are on the title page
                                                                                            echo get_the_title($theParent);

                                                                                            ?></a></h2>
                <ul class="min-list">

                    <?php
                    //get the id of the parent post
                    //if no parent, get the post ide
                    //then find children of that post
                    if ($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID();
                        //this gets children of the child

                    }

                    /**
                     * Lists associated pages.
                     */
                    wp_list_pages(array(
                        'depth'        => 0,
                        'show_date'    => '',
                        'date_format'  => get_option('date_format'),
                        'child_of'     => $findChildrenOf, //gets the right parent page
                        'exclude'      => '',
                        'title_li'     => NULL,
                        'authors'      => '',
                        'sort_column'  => 'menu_order',
                        'link_before'  => '',
                        'link_after'   => '',
                        'item_spacing' => 'preserve',
                        'walker'       => '',
                    ));
                    ?>

                    <!-- <li class="current_page_item"><a href="#"><?php the_title(); ?></a></li>
                <li><a href="#">Our Goals</a></li> -->
                </ul>
            </div>
        <?php } ?>

        <div class="generic-content">
            <p><?php the_content(); ?></p>
        </div>
    <?php }

get_footer() ?>