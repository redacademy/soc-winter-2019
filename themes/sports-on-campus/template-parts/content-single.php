<?php
/**
 * Template part for displaying single posts.
 *
 * @package Sport_On_Campus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
