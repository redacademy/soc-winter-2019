<?php
/**
 * The template for displaying all pages.
 * Template name: Home
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <?php if ( is_home() && ! is_front_page() ) : ?>
			
				<?php while ( have_posts() ) : the_post(); ?>


            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>

                    <?php if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                        <?php Sport_On_Campus_posted_on(); ?>
                    </div><!-- .entry-meta -->
                    <?php endif; ?>
                    
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                </header><!-- .entry-header -->
            </article><!-- #post-## -->

				<?php endwhile; ?>
				
				<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>