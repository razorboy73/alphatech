<?php

/**
 * The template for displaying all pages
 *
 * @package alpha-tech
 *
 
 */

while (have_posts()) {
    the_post(); ?>

    <h2><?php echo the_title(); ?></h2>
    <p><?php the_content(); ?> </p>
    <hr>
<?php } ?>