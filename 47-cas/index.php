<?php get_header(); ?>

    <!-- Blog section -->
    <section class="blog container">
        <h2>Blog</h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="singlePost">
                <a class="post-heading" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                <span><?php echo get_the_date(); ?> &nbsp;&nbsp;|&nbsp;&nbsp;</span> <span class="cat"><?php the_category(); ?></span>
                <?php the_excerpt(); ?>
            </article>

        <?php endwhile; ?>
        <?php else : ?>
            <?php _e('Nema jos postova u bazi'); ?>
        <?php endif; ?>

    </section>

<?php get_footer(); ?>
