<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amazing Blog
 */
$amazing_blog_default_layout = amazing_blog_default_layout();
if( !empty( $amazing_blog_default_layout ) ){
	if( 'no-sidebar' == $amazing_blog_default_layout ){
		return;
	}

}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="sidebar-inner block-section block-holder">
	<?php
		if ( !is_active_sidebar( 'sidebar-1' ) ) {
			if ( current_user_can( 'edit_theme_options' ) ) {
			    echo sprintf(
			        __( 'To Add Sidebar Widget %s', 'amazing-blog' ),
			        '<a href="' . esc_url( admin_url( 'widgets.php' ) ) . '">' . __( 'click here', 'amazing-blog' ) . '</a>'
			        );
			}
		}
		else{
			dynamic_sidebar( 'sidebar-1' ); 
		}
	?>
	</div>
</div><!-- #secondary -->