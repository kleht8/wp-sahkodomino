<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<!-- <div class="wrap"> -->

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			
			<?php if ( is_active_sidebar( 'tagline' )): ?>
		<?php
		if ( is_active_sidebar( 'tagline' ) ): ?>
				<?php dynamic_sidebar( 'tagline' ); ?>
			</div>
		<?php endif ?>
	</aside><!-- .widget-area -->
<?php else: ?>
	<h1 class="site-title"><?php echo get_bloginfo( 'description' ) ?> </h1>
<?php endif; ?>

		</div>

		<!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
<!-- 		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
 -->	<?php endif; ?>

	<!-- </div> -->
	<!-- .wrap -->
</div><!-- .site-branding -->
