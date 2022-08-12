<?php
// Functions Page

function my_excerpt_length(){
    return 36;
}

add_filter('excerpt_length', 'my_excerpt_length');

set_post_thumbnail_size(200);
add_theme_support('post-thumbnails');

// Navigation

register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu',
    'reviews' => 'Reviews',
    'news' => 'News'
));

//Enqueuing Scripts
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );