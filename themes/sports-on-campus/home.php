<?php
/**
 * The template for displaying all pages.
 * Template name: Home
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

		<div class="categories-loop">
			<?php $blog_types=get_terms('blog_type');?>
			<?php foreach ( $blog_types as $term ) : setup_postdata( $term ); ?>
             <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?></a>
            <?php endforeach; wp_reset_postdata(); ?>
		</div>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>