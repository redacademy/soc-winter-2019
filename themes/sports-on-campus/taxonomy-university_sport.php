<?php
/**
 * The template for displaying archive pages.
 *
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

<div id="primary" class="content-area archive-university-content page-template-archive-university">
    <main id="main" class="site-main" role="main">

        <?php $sports = get_terms('university_sport', array(
            'hide_empty' => false,
            'orderby' => 'ID',
            'order' => 'ASC'
        )); ?>
        <h2 class="heading-university">Universities</h2>
        <div class="drop-down-menu-block">
            <p>Select sport</p>
            <select class='minimal choose-sport-menu '>
                <option>Choose an option</option>
                <?php foreach ($sports as $sport) : ?>
                
                <?php if (single_cat_title("",false)=== $sport->name) : ?>
                <option selected value="<?php echo $sport->name ?>" linkinfo="<?php echo get_term_link($sport); ?>" class="each-item <?php echo $sport->name ?>-menu">
                    <?php echo $sport->name ?>
                </option>
                <?php else : ?>
                <option value="<?php echo $sport->name ?>" linkinfo="<?php echo get_term_link($sport); ?>" class="each-item <?php echo $sport->name ?>-menu">
                    <?php echo $sport->name ?>
                </option>
                <?php endif ?>
                <?php endforeach ?>
            </select>
        </div>


        <?php if (have_posts()) : ?>

        <div class="university-container">
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
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 