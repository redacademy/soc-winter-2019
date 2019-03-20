<?php
/**
 * The template for displaying archive pages.
 *
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php
					get_template_part( 'template-parts/content' );
				?>
				
			<?php endwhile; ?>
		<?php endif; ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
