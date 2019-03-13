<?php
/**
 * The template for displaying the footer.
 *
 * @package Sport_On_Campus_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<img src=<?php echo get_template_directory_uri() . '/icons/twitter-footer.svg'?>>
				<img src=<?php echo get_template_directory_uri() . '/icons/facebook-footer.svg'?>>
				<img src=<?php echo get_template_directory_uri() . '/icons/instagram-footer.svg'?>>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
