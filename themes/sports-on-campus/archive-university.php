<?php
/**
 * The template for displaying all pages.
 * Template name: archive-university
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php $universities =  soc_get_universities(); ?>
        <?php foreach ($universities as $post) : setup_postdata($post); ?>
        <article id="university-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (has_post_thumbnail()) : ?>
            <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                <?php the_post_thumbnail('large'); ?>
            </a>
            <?php endif; ?>
            <div class="university-title-location">
                <a href="<?php echo esc_url(the_permalink()) ?>" rel="bookmark">
                    <h3 class="university-name">
                        <?php echo the_title() ?>
                    </h3>
                </a>
                <p class="university-city"><?php echo CFS()->get('city'); ?></p>
            </div>
        </article>
        <?php endforeach;
    wp_reset_postdata(); ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 