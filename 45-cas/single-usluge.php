<?php get_header(); ?>

    <!-- headers -->
    <header class="headers position-relative">
        <?php the_post_thumbnail(); ?>
        <h1 class="display-1 text-white position-absolute translate-middle top-50 start-50 py-2 px-5"><?php the_title(); ?></h1>
    </header>

    <!-- loop -->
    <main class="container py-5">
        <div class="row">
            <section class="col-md-12">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>            
                    <div class="text text-white mx-auto w-75 p-4 position-relative">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <?php else : ?>
                    <?php _e('Name jos stranica'); ?>
                <?php endif; ?>
            </section>
        </div>
    </main>

<?php get_footer(); ?>