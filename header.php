<?php
/**
 * The default template for displaying header
 *
 * @package eVision themes
 * @subpackage Amazing BLog
 * @since Amazing BLog 1.0.0
 */

/**
 * amazing_blog_action_before_head hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_set_global -  0
 * @hooked amazing_blog_doctype -  10
 */
do_action( 'amazing_blog_action_before_head' );?>
<head>

	<?php
	/**
	 * amazing_blog_action_before_wp_head hook
	 * @since Amazing BLog 1.0.0
	 *
	 * @hooked amazing_blog_before_wp_head -  10
	 */
	do_action( 'amazing_blog_action_before_wp_head' );

	wp_head();

	/**
	 * amazing_blog_action_after_wp_head hook
	 * @since Amazing BLog 1.0.0
	 *
	 * @hooked null
	 */
	do_action( 'amazing_blog_action_after_wp_head' );
	?>

</head>

<body <?php body_class(); ?>>

<?php
/**
 * amazing_blog_action_before hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_page_start - 15
 */
do_action( 'amazing_blog_action_before' );

/**
 * amazing_blog_action_before_header hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_skip_to_content - 10
 */
do_action( 'amazing_blog_action_before_header' );


/**
 * amazing_blog_action_header hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked amazing_blog_after_header - 10
 */
do_action( 'amazing_blog_action_header' );


/**
 * amazing_blog_action_after_header hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked null
 */
do_action( 'amazing_blog_action_after_header' );


/**
 * amazing_blog_action_before_content hook
 * @since Amazing BLog 1.0.0
 *
 * @hooked null
 */
do_action( 'amazing_blog_action_before_content' );
?>