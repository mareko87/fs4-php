<?php
/*
* Template Name: Works
*/
get_header(); ?>

    <!-- works -->
    <section class="work container">
        <h2><?php the_field('works_page_naslov'); ?></h2>
        <?php get_template_part('template_parts/works_list'); ?>
    </section>

<?php get_footer(); ?>