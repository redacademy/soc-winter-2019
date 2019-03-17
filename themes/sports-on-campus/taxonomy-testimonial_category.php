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
			<div class="mobile-slide">
                <?php $testimonials = get_terms("testimonial_category"); ?>
                <?php foreach ($testimonials as $value) : setup_postdata($value); ?>
                <a href=<?php echo get_term_link($value) ?>><?php echo $value->name ?></a>
                <?php endforeach;wp_reset_postdata(); ?>
                <?php $testimonials = soc_get_testimonial_category(); ?>
            </div>
			<?php while ( have_posts() ) : the_post(); ?>
			<article  id="testimonial-<?php the_ID(); ?>" <?php post_class(); ?>>
               <?php if (has_post_thumbnail()) : ?>
               <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                   <?php the_post_thumbnail('large'); ?>
               </a>
               <?php endif; ?>
               <img class="test-image sample-picture" src='<?php echo CFS()->get('video'); ?>'>
               <h1>
                   <?php the_title(); ?>
               </h1>
                               <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
                               <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                               <?php the_content(); ?>
           </article>
				<?php endwhile; ?>
				<?php endif; ?>  
        </main><!-- #main -->
</div>


<?php get_footer(); ?>