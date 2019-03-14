<?php
/**
 * The template for displaying all pages.
 * Template name: login
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <form>
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
        </form>
        <div>
            <input type="checkbox" name="remember" id="remember" value="Remember me"><label for="remember">Remember me</label>
            <input type="submit" name="submit" value="Login">
        </div>

        <div>
            <a>Register now</a>
            <a>Forgot password</a>
        </div>


    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 