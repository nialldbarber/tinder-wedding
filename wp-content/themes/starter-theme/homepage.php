<?php
/*
Template Name: Homepage
*/

get_header();
    if ( have_posts() ) : the_post();
        include get_template_directory() . '/inc/couple-photos.php';
        include get_template_directory() . '/inc/wedding-info.php';
        include get_template_directory() . '/inc/invitee.php';
        include get_template_directory() . '/inc/song-choice.php';
        include get_template_directory() . '/inc/menu.php';
    endif;
get_footer(); ?>