<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pro Blog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-3 col-sm-12">
	<aside id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
</div>