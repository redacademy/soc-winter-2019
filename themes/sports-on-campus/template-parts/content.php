<?php
/**
 * Template part for displaying posts.
 *
 * @package Sport_On_Campus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="entry-meta">
			<?php Sport_On_Campus_posted_on(); ?>
		</div><!-- .entry-meta -->

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
