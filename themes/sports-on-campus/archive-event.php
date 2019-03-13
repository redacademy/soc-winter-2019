<?php
/**
 * The template for displaying all pages.
 *Template name: archive-event
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

<header class="page-header">
	
</header><!-- .page-header -->
<section class="shop-push">
	<div class="product-chunk">
		<!-- <?php $testimonials=get_terms("testimonial_category");?> -->
		<?php foreach ($testimonials as $value): setup_postdata($value);?>
		 <a href=<?php echo get_term_link($value)?>> <?php echo $value->name?></a>
		<?php endforeach; wp_reset_postdata();?>
	</div>
	
</section>
</section>
<section>
	<div class="shop-loop">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
			get_template_part( 'template-parts/content', 'single' );
		?>
		<?php endwhile; ?>
		<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

			<div class="event-date"> <?php echo CFS()->get('date'); ?> </div>
			<div class="event-location"> <?php echo CFS()->get('location'); ?> </div>
 	


			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
