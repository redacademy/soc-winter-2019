<?php
/**
 * The template for displaying the footer.
 *
 * @package sport_on_campus_theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
			<h5>Copyright 2019</h5>
					
				<div class="site-info">
					<img alt='twitter' src=<?php echo get_template_directory_uri() . '/Icons/twitter-footer.svg'?>>
					<img alt='facebook' src=<?php echo get_template_directory_uri() . '/Icons/facebook-footer.svg'?>>
					<img alt='instagram' src=<?php echo get_template_directory_uri() . '/Icons/instagram-footer.svg'?>>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
