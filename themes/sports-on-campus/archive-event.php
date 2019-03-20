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
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <section>
                <div class="container">
                    <div class="events-area">
                        <?php $eventpage=soc_get_events();?>
                        <?php foreach ($eventpage as $post) : setup_postdata($post); ?>
                        <article id="event-<?php the_ID(); ?>"
                        <?php post_class(); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                            <?php the_post_thumbnail('large'); ?>
                            </a>
                        <?php endif; ?>
                        <img class="event-image sample-picture" src='<?php echo CFS()->get('image'); ?>'>
                        <div class="event-grid">
                            <p class="event-date"><?php echo CFS()->get('date'); ?></p>
                            <h3><?php the_title();?></h3>
                            <p class="event-location"><?php echo CFS()->get('location'); ?></p>
                            <div class="event-content"><?php the_content();?></div>
                            </div>
                        </article>
                        <?php endforeach; wp_reset_postdata();?>
                    </div>
                </div>
            </section>
        <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </main><!-- #main -->
</div>
<?php get_footer(); ?>