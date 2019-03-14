<?php
/**
 * The template for displaying all pages.
 *Template name: archive event
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php if ( have_posts() ) : ?>

            <section>          
                      <?php $eventpage=soc_get_events();?>
                    <?php foreach ($eventpage as $post) : setup_postdata($post); ?>
                    <article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                             <?php the_post_thumbnail('large'); ?>
                        </a>
                        <?php endif; ?>
                         <h1>
                             <?php the_title();?>
                        </h1>
                        <?php the_content();?>
                         <p class="event-date"> <?php echo CFS()->get('date'); ?> </p>
                        <p class="event-location"> <?php echo CFS()->get('location'); ?> </p>
                        <img class="event-image" src='<?php echo CFS()->get('image'); ?>'>
                    </article>
                    <?php endforeach; wp_reset_postdata();?>
    
            </section>
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

        </main><!-- #main -->
    </div>


<?php get_footer(); ?>