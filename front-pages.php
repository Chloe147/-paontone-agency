<?php
/**
 * Template Name: Front page
 * The template for displaying home page.
 * @package Amazing Blog
 */

get_header();
/**
 * amazing_blog_action_front_page hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_action_front_page -  10
 * @sub_hooked amazing_blog_action_front_page -  10
 */
do_action( 'amazing_blog_action_front_page' );

get_footer();