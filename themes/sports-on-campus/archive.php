<?php
/**
 * The template for displaying archive pages.
 *
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="blog-loop">
	        <ul class="mobile-slide">
                <h1 class="banner-text-desktop">Blog</h1>
                <div class="banner-box">
                    <?php wp_list_categories('title_li=') ?>
                </div>    
            </ul>
		</div>
<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php
					get_template_part( 'template-parts/content' );
				?>
				
			<?php endwhile; ?>
		<?php endif; ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
