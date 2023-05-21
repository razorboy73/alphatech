<?php

/**
 * The template for displaying all archives
 *
 * @package alpha-tech
 *
 
 */

get_header();
pageBanner(
    array(
        'title' => get_the_archive_title(),
        'subtitle' => get_the_archive_description()
    )
);





?>


<div class="container container--narrow page-section">
    <?php

    if (have_posts()) :
        while (have_posts()) : the_post();
            // do stuff ... 
    ?>
            <div class="post-item">
                <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <div class="metabox">
                    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time("n.j.y"); ?> in <?php echo get_the_category_list(", ", "single"); ?> </p>
                </div>
                <div class="generic-content">
                    <?php the_excerpt(); ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading </a></p>
                </div>
            </div>
    <?php
        endwhile;
    else :
    endif;
    wp_reset_postdata();

    echo paginate_links();
    ?>



</div>

<?php get_footer();
