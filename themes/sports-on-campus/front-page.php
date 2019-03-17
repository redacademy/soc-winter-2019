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

        <?php the_content(); ?>

        <?php endwhile; ?>

        <section class="sport-select-container">
            <h3>Start with what you know</h3>
            <h2>Choose Sport</h2>
            <?php $sports = get_terms('university_sport', array(
                'hide_empty' => false,
                'orderby' => 'name',
                'order' => 'ASC'
            )); ?>
            <ul class="sport-list">
                <?php foreach ($sports as $sport) : ?>
                <li class="each-item <?php echo $sport->name ?>-menu">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/" . $sport->name . ".png" ?>>
                    <p>
                        <?php echo $sport->name ?>
                    </p>
                </li>
                <?php endforeach ?>
            </ul>
            <button>Search</button>
        </section>

        <h1>Testimonials</h1>
        <section class="front-page-testimonials">
            <div class="main-carousel testimonial-container" data-flickity='{ "autoPlay": true }'>



                <?php $testimonials = soc_get_testimonial_category(); ?>
                <?php foreach ($testimonials as $post) : setup_postdata($post); ?>

                <div class="carousel-cell testimonial-item" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                    <?php endif; ?>
                    <img class="test-image sample-picture" src='<?php echo CFS()->get('video'); ?>'>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                    <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
                    <i class="fas fa-quote-left"></i>
                    <?php the_content(); ?>
                </div>

                <?php endforeach;
            wp_reset_postdata(); ?>

            </div>

        </section>


    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 