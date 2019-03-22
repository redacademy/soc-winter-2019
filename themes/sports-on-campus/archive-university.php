<?php
/**
 * The template for displaying all pages.
 * Template name: archive-university
 * @package Sport_On_Campus_Theme
 */

get_header(); ?>

<div id="primary" class="content-area archive-university-content">
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
                <option value="<?php echo $sport->name?>" linkinfo="<?php echo get_term_link($sport); ?>" class="each-item <?php echo $sport->name ?>-menu">
                    <?php echo $sport->name ?>
                </option>
                <?php endforeach ?>
            </select>
        </div>
        
        <?php $universities = soc_get_universities(); ?>
        <div class="university-container">
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
        </div>
</div>

</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 