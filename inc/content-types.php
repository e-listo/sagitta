<?php
if (!defined('ABSPATH')) { exit; }

function sagitta_register_content_types() {
    register_post_type('karya', array(
        'labels' => array(
            'name' => __('Karya visual', 'sagitta'),
            'singular_name' => __('Karya visual', 'sagitta'),
            'add_new_item' => __('Tambah karya visual', 'sagitta'),
            'edit_item' => __('Sunting karya visual', 'sagitta'),
            'all_items' => __('Semua karya visual', 'sagitta'),
        ),
        'public' => true,
        'has_archive' => 'karya-visual',
        'rewrite' => array('slug' => 'karya'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-image',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    ));

    register_post_type('proyek', array(
        'labels' => array(
            'name' => __('Proyek media', 'sagitta'),
            'singular_name' => __('Proyek media', 'sagitta'),
            'add_new_item' => __('Tambah proyek media', 'sagitta'),
            'edit_item' => __('Sunting proyek media', 'sagitta'),
            'all_items' => __('Semua proyek media', 'sagitta'),
        ),
        'public' => true,
        'has_archive' => 'proyek-media',
        'rewrite' => array('slug' => 'proyek'),
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-video',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    ));
}
add_action('init', 'sagitta_register_content_types');