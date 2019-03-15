<?php
/**
 * The main template file.
 *
 * @package Sport_On_Campus_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php the_content();?>

        <?php endwhile; ?>


        <?php $testimonials = get_terms("testimonial_category"); ?>
        <?php foreach ($testimonials as $value) : setup_postdata($value); ?>
        <a href=<?php echo get_term_link($value) ?>> <?php echo $value->name ?></a>
        <?php endforeach;
    wp_reset_postdata(); ?>


        <section class="front-page-testimonials">
            <div class="main-carousel" data-flickity='{ "autoPlay": true }'>



                <?php $testimonials = soc_get_testimonial_category(); ?>
                <?php foreach ($testimonials as $post) : setup_postdata($post); ?>

                <div class="carousel-cell" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                    <?php endif; ?>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                    <div class="test-video"> <?php echo CFS()->get('video'); ?> </div>
                    <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                    <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
                </div>

                <?php endforeach;
            wp_reset_postdata(); ?>

            </div>

        </section>


    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 