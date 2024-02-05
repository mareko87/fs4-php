<?php get_header(); ?>

    <!-- Blog section -->
    <section class="blog container single-works">
        <h2><?php the_title(); ?></h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="singlePost">
                <span><?php echo get_the_date(); ?> &nbsp;&nbsp;|&nbsp;&nbsp;</span> <span class="cat"><?php the_category(); ?></span>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </article>

        <?php endwhile; ?>
        <?php else : ?>
            <?php _e('Nema jos postova u bazi'); ?>
        <?php endif; ?>

    </section>

<?php get_footer(); ?>