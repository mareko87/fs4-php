<?php get_header(); ?>

<!-- main header -->
<header class="mainHeader">
    <img class="img-fluid" src="<?php the_field('home_header_img'); ?>" alt="<?php echo 'Home slika'; ?>">
</header>

<!-- baner -->
<section class="container baner text-center text-white p-5 position-relative">
    <h1><?php the_field('about_naslov'); ?></h1>
    <p class="lead"><?php the_field('about_text'); ?></p>
</section>

<!-- usluge -->
<section class="usluge container py-5">
    <h2 class="text-center"><?php the_field('usluge_heading'); ?></h2>
    <article class="row">

    <?php $query = new WP_Query(array('post_type' => 'usluge'));
    if($query->have_posts()) : ?>
    <?php while($query->have_posts()) : $query->the_post(); ?>
        <div class="col-md-4">
            <div class="card">
                <?php the_post_thumbnail(); ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                    <?php _e('Procitaj vise'); ?>
                    </a>
                </div>
            </div>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>
        <?php _e('Nema jos unetih usluga'); ?>
    <?php endif; ?>
        
    </article>
</section>

<?php get_footer(); ?>