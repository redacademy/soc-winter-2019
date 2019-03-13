<?php
/**
 * The template for displaying all pages.
 * Template name: archive-university
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php $universities =  soc_get_universities(); ?>
        <?php foreach ($universities as $university) : setup_postdata($university); ?>
        <article id="university-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
            <div class="university-title-button">
                <h3 class="entry-title">
                    <a href="<?php echo esc_url(get_the_permalink($university)) ?>" rel="bookmark">
                    <?php echo get_the_title($university)?>
                    </a>
                </h3>
                <input type="button" value="READ MORE" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo get_the_permalink($university) ?>'" />
            </div><!-- .entry-button -->
        </article><!-- #post-## -->
        <?php endforeach;
    wp_reset_postdata(); ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 