<?php
function intraterra_custom_post_types() {
    register_post_type('project', array(
        'labels' => array(
            'name' => 'Proyectos',
            'singular_name' => 'Proyecto'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'proyectos'),
        'show_in_rest' => true, // para Gutenberg o API
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
         'menu_icon' => 'dashicons-portfolio',
    
    ));
}
add_action('init', 'intraterra_custom_post_types');