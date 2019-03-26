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
        <section class="entry-content">
            <?php the_content(); ?>
        </section>
        <?php endwhile; ?>

        <section class="entry-content step-to-follow-container">
            <h2>Just 3 easy steps to follow</h2> 

            <div class="step-text-container">
                <div class="step-text-block">
                    <h3>1. Search</h3>
                    <p>University that interests you on our page</p>
                </div>
                <div class="orange-vertical-line"></div>
                <div class="step-text-block">
                    <h3>2. Sign up</h3>
                    <p>Sign up with us and fill in your athletic information</p>
                </div>
                <div class="orange-vertical-line"></div>
                <div class="step-text-block">
                    <h3>3. Connect</h3>
                    <p>Send request to coach from universities of your choice</p>
                </div>
            </div>
        </section>

        <section class="entry-content sport-select-container">
            <h3>Start with what you know</h3>
            <h2>Choose Sport</h2>
            <?php $sports = get_terms('university_sport', array(
                'hide_empty' => false,
                'orderby' => 'meta_value',
                'order' => 'ASC'
            )); ?>
            <ul class="sport-list">
                <?php foreach ($sports as $sport) : ?>
                <li class="each-item <?php echo $sport->name ?>-menu">
                    <img src=<?php echo get_template_directory_uri() . "/assets/images/" . $sport->name . ".png" ?>>
                    <p linkinfo="<?php echo get_term_link($sport); ?>">
                        <?php echo $sport->name ?>
                    </p>
                </li>
                <?php endforeach ?>
            </ul>
            <button class="orange-button front-page-search">Search</button>
        </section>


        <section class="entry-content front-page-testimonials">
            <h1 class="test-title">Testimonials</h1>
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
                    <div class="test-right-column">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <div class="test-position"> <?php echo CFS()->get('position'); ?> </div>
                        <div class="test-uni"> <?php echo CFS()->get('university'); ?> </div>
                        <div class="test-block">
                            <i class="fas fa-quote-left"></i>
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div>

                <?php endforeach;
            wp_reset_postdata(); ?>

            </div>

        </section>


    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 