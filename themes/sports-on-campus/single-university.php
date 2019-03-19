<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				<div class="ubc-intro">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
<ul class="sport-list"> 
	<li class="soccer"><img src="https://soc.van.cp.academy.red/wp-content/themes/sports-on-campus/assets/images/Soccer.png" alt="soccer-ball"> </li>
	
	<li class="football"><img src="https://soc.van.cp.academy.red/wp-content/themes/sports-on-campus/assets/images/Rugby.png" alt="football"></li>
	<li class="basketball"><img src="https://soc.van.cp.academy.red/wp-content/themes/sports-on-campus/assets/images/Basketball.png" alt="basketball"></li>
	<li class="volleyball"><img src="https://soc.van.cp.academy.red/wp-content/themes/sports-on-campus/assets/images/Volleyball.png" alt="volleyball "></li>
</ul>

			<?php the_content(); ?>
		</div><!-- .entry-content -->
			</section>
<h3> program & more</h3>
			<div class="uni-program"> <?php echo CFS()->get('program'); ?> </div>
			<div class="read-more"><p>Read more</p></div>
			
			<div class="uni-prerequisites"><h3 class="secondary-heading">prerequisites for application</h3> <?php echo CFS()->get('prerequisites'); ?> </div>
			<h3>facilities and quick links</h3>
			<div class="uni-facilities"> <?php echo CFS()->get('facilities'); ?> </div>
			<div class="uni-maps"> <?php echo CFS()->get('maps'); ?> </div>

			<footer class="entry-footer">
				<?php Sport_On_Campus_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->
			<?php the_post_navigation(); ?>
			<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
