<?php
// theme setup
function portfolio_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menu('main-manu', 'Main menu');

}
add_action('after_setup_theme', 'portfolio_theme_support');

// excerpt length
function excerpt() {
    return 30;
}
add_filter('excerpt_length', 'excerpt');

// load scripts
function porfolio_theme_css() {
    wp_enqueue_style('bootstran-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css');
    wp_enqueue_style('style-css', get_template_directory_uri(). '/style.css');
}
add_action('wp_enqueue_scripts', 'porfolio_theme_css');

// widgets
function widgets() {
    register_sidebar(array(
        'name' => 'Footer widget',
        'id' => 'footer_widget',
        'before_widget' => '<footer class="container">',
        'after_widget' => '</footer">'
    ));
}
add_action('widgets_init', 'widgets');