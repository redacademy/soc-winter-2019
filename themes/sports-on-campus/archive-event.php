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

            <section class="shop-push">
                <div class="product-chunk">
        
					<?php $testimonials=get_terms("testimonial_category");?>
                    <?php foreach ($testimonials as $post) : setup_postdata($post); ?>
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
                        <div class="event-date"> <?php echo CFS()->get('date'); ?> </div>
                        <div class="event-location"> <?php echo CFS()->get('location'); ?> </div>
                        
                    </article>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
    
                </div>

            </section>
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

            <div class="test-video"> <?php echo CFS()->get('video'); ?> </div>
            <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
            <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
    


            
        </main><!-- #main -->
    </div>


<?php get_footer(); ?>