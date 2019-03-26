<?php
/**
 * The template for displaying archive pages.
 *Template name: Taxonomy Testimonial
 * @package sport_on_campus_theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
		<ul class="mobile-slide">
		<h1 class="banner-text-desktop">Testimonials</h1>
			<div class= "banner-box">
                <?php $testimonials = get_terms("testimonial_category"); ?>
				<?php foreach ($testimonials as $value) : setup_postdata($value); ?>
				<li class="slide-list">

				<a href=<?php echo get_term_link($value) ?> class='<?php echo $class; ?>'><?php echo $value->name ?></a>
				  <!-- <?php $class = ( is_category( $value->name ) ) ? 'active' : '';?>
					<a href=<?php echo get_term_link($value) ?> class='<?php echo $class; ?>'><?php echo $value->name ?></a>
					<?php
					   $catObj = get_category_by_slug('category-slug'); 
					   $catName = $catObj->name;
					   echo $catName;

					// if ($value->slug === 'all'){
						echo $value->slug;

					// 
					?> -->
				</li>
                <?php endforeach;wp_reset_postdata(); ?>
				<?php $testimonials = soc_get_testimonial_category(); ?>
			</div>	
		</ul>
			<?php while ( have_posts() ) : the_post(); ?>
			<article  id="testimonial-<?php the_ID(); ?>" <?php post_class(); ?>>
               <?php if (has_post_thumbnail()) : ?>
               <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                   <?php the_post_thumbnail('large'); ?>
               </a>
               <?php endif; ?>
			   <img class="test-image sample-picture" src='<?php echo CFS()->get('video'); ?>'>
			   <div class="test-cluster">
               		<h1>
                  	 <?php the_title(); ?>
               		</h1>
                    <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
					<div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
					<div class="test-block">
                        <i class="fas fa-quote-left"></i>
						<?php the_content(); ?>
					</div>
				</div>                 
           	</article>
				<?php endwhile; ?>
				<?php endif; ?>  
        </main><!-- #main -->
</div>


<?php get_footer(); ?>