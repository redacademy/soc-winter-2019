<?php
/**
 * Template part for displaying posts.
 *
 * @package sport_on_campus_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="blog-container">
		
			<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php echo esc_url( get_permalink() )?>">
				<?php the_post_thumbnail( 'large' ); ?>
			</a>
			<?php endif; ?>

			<div class="blog-text">
				<div class="entry-meta">
					<?php sport_on_campus_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</div>
				<?php if ( 'post' === get_post_type() ) : ?>

				<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
