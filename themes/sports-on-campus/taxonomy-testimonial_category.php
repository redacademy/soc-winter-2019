<?php
/**
 * The template for displaying archive pages.
 *Template name: Taxonomy Testimonial
 * @package Sport_On_Campus_Theme
 */


get_header(); ?>

   <div id="primary" class="content-area">
       <main id="main" class="site-main" role="main">
          <?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );		
				?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
 			<?php $testimonials=get_terms("testimonial_category");?>
            <?php foreach ($testimonials as $value): setup_postdata($value);?>
            <a href=<?php echo get_term_link($value)?>> <?php echo $value->name?></a>
            <?php endforeach; wp_reset_postdata();?>
				<article id="testimonial-<?php the_ID(); ?>" <?php post_class(); ?>>
		            <?php if (has_post_thumbnail()) : ?>
		            <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
		                <?php the_post_thumbnail('large'); ?>
	                </a>
		            <?php endif; ?>
                    <h1>
                       <?php the_title();?>
                    </h1>
                     <?php the_content();?>
                        <div class="test-video"> <?php echo CFS()->get('video'); ?> </div>
                        <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                        <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
                </article>	
				<?php endwhile; ?>
				<?php endif; ?>

          
        </main><!-- #main -->
   </div>


<?php get_footer(); ?>