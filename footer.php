<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package eVision themes
 * @subpackage Amazing BLog
 * @since Amazing BLog 1.0.0
 */

/**
 * amazing_blog_action_after_content hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked null
 */
do_action( 'amazing_blog_action_after_content' );

/**
 * amazing_blog_action_before_footer hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_before_footer - 10
 */
do_action( 'amazing_blog_action_before_footer' );

/**
 * amazing_blog_action_footer hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_footer - 10
 */
do_action( 'amazing_blog_action_footer' );

/**
 * amazing_blog_action_after_footer hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked null
 */
do_action( 'amazing_blog_action_after_footer' );

/**
 * amazing_blog_action_after hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_page_end - 10
 */
do_action( 'amazing_blog_action_after' );
?>
<?php wp_footer(); ?>
</body>
</html>
