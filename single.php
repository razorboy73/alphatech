<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package alpha-tech
 *
 
 */

get_header();

while (have_posts()) {
    the_post(); ?>

    <h2><?php echo the_title(); ?></h2>
    <p><?php the_content(); ?> </p>
    <hr>
<?php }

get_footer();

?>