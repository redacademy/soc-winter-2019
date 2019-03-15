<?php
/**
 * The template for displaying all pages.
 *Template name: archive-testimonial
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : ?>
        <section>
            <?php $testimonials = get_terms("testimonial_category"); ?>
            <?php foreach ($testimonials as $value) : setup_postdata($value); ?>
            <a href=<?php echo get_term_link($value) ?>><?php echo $value->name ?></a>
            <?php endforeach;
        wp_reset_postdata(); ?>
            <?php $testimonials = soc_get_testimonial_category(); ?>
            <?php foreach ($testimonials as $post) : setup_postdata($post); ?>
            <article id="testimonial-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                    <?php the_post_thumbnail('large'); ?>
                </a>
                <?php endif; ?>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
                <!--                         <div class="test-video"> <?php  ?> </div> -->
                                        <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                                        <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
                             </article>
                         <?php endforeach;
                        wp_reset_postdata(); ?>
                
                            

                        </section>
        <?php else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </main><!-- #main -->
</div>


<?php get_footer(); ?> 