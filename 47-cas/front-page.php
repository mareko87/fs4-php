<?php get_header(); ?>

    <!-- main header -->
    <header class="mainHeader container">
        <div class="text">
            <h1><?php the_field('header_naslov'); ?></h1>
            <p><?php the_field('header_paragraf'); ?></p>
            <a href="" class="btn"><?php the_field('header_button'); ?></a>
        </div>
        <div class="img">
            <img src="<?php the_field('header_slika'); ?>" alt="<?php echo 'moja slika'; ?>">
        </div>
    </header>
    <!-- posts -->
    <section class="posts">
        <div class="container">
            <div class="viewAll">
                <h4><?php the_field('posts_naslov'); ?></h4>
                <a href="<?php the_field('posts_dugme_link'); ?>"><?php the_field('posts_dugme_tekst'); ?></a>
            </div>
            <div class="listPosts">

            <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2));
            if($query->have_posts()) : ?>
            <?php while($query->have_posts()) : $query->the_post(); ?>
                <article class="singlePost">
                    <a class="post-heading" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    <span><?php echo get_the_date(); ?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php the_category(); ?></span>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php else: ?>
                <?php _e('Nema jos postova u bazi'); ?>
            <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- works -->
    <section class="works container">
        <h4><?php the_field('featured_works_naslov'); ?></h4>
        <?php get_template_part('template_parts/works_list'); ?>
    </section>
    
<?php get_footer(); ?>