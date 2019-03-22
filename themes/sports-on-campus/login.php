<?php
/**
 * The template for displaying all pages.
 * Template name: login
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

               <?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    <div class="container">
        <form>
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
        </form>

        <div class="remember-me">
            <input type="checkbox" name="remember" id="remember" class="remember-input" value="Remember me"><label for="remember">Remember me</label>
        </div>
        <div class="login-button">
            <input type="submit" name="submit" value="Login">
        </div>

 
        
        <div class="login-options">
            <a>Forgot Password?</a>
        </div>
        <hr>
</div>
		<div class="entry-content">
			<?php the_content(); ?>
        </div><!-- .entry-content -->
        
	</div>
</article><!-- #post-## -->

<?php endwhile; // End of the loop. ?>



    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 