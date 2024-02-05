<?php $query = new WP_Query(array('post_type' => 'works'));
if($query->have_posts()) : ?>
<?php while($query->have_posts()) : $query->the_post(); ?>
    <article class="singlePost">
        <div class="img">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="text">
            <h2><?php the_title(); ?></h2>
            <span class="date"><?php echo get_the_date('Y'); ?></span><span class="cat"><?php the_category(); ?></span>
            <?php the_excerpt(); ?>
        </div>
    </article>
<?php endwhile; wp_reset_postdata(); ?>
<?php else: ?>
    <?php _e('Nema jos radova'); ?>
<?php endif; ?>