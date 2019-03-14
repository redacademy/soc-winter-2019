<?php
/**
 * The template for displaying archive pages.
 *
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

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

        <?php endwhile; ?>
        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 