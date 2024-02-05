<?php get_header(); ?>

    <!-- headers -->
    <header class="headers position-relative">
        <img src="<?php echo get_template_directory_uri(); ?>/img/blog-header.jpg" alt="">
        <h1 class="display-1 text-white position-absolute translate-middle top-50 start-50 py-2 px-5">Blog</h1>
    </header>

    <!-- blog listing -->
    <main class="container py-5">
        <div class="row">
            <section class="col-md-8">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>            
                <article>
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text text-white mx-auto w-75 p-4 position-relative">
                        <h3><?php the_title(); ?></h3>
                        <span><?php echo get_the_date('Y-m-d H:i:s'); ?> | <?php the_author(); ?></span>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-light">
                        <?php _e('Procitaj clanak'); ?>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php else : ?>
                <?php _e('Name jos postova'); ?>
            <?php endif; ?>
                
            </section>
            <?php get_sidebar(); ?>
        </div>
    </main>

<?php get_footer(); ?>