<?php
if (!defined('ABSPATH')) { exit; }
function sagitta_setup() {
    load_theme_textdomain('sagitta', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('comment-form', 'comment-list', 'gallery', 'caption', 'search-form', 'style', 'script'));
    register_nav_menus(array('primary' => __('Navigasi utama', 'sagitta')));
}
add_action('after_setup_theme', 'sagitta_setup');
function sagitta_assets() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sagitta-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap', array(), null);
    wp_enqueue_style('sagitta-style', get_stylesheet_uri(), array(), $version);
    wp_enqueue_style('sagitta-main', get_template_directory_uri() . '/assets/css/main.css', array('sagitta-style'), $version);
    if (is_front_page()) { wp_enqueue_style('sagitta-home', get_template_directory_uri() . '/assets/css/home.css', array('sagitta-main'), $version); }
    if (is_home() || is_archive() || is_singular('post')) { wp_enqueue_style('sagitta-writing', get_template_directory_uri() . '/assets/css/writing.css', array('sagitta-main'), $version); }
    wp_enqueue_script('sagitta-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'sagitta_assets');
function sagitta_menu_fallback() {
    $posts_page_id = (int) get_option('page_for_posts');
    $posts_url = $posts_page_id ? get_permalink($posts_page_id) : '';
    echo '<ul class="site-menu"><li><a href="' . esc_url(home_url('/')) . '">Beranda</a></li><li>';
    if ($posts_url) {
        echo '<a href="' . esc_url($posts_url) . '">Tulisan</a>';
    } else {
        echo '<span aria-disabled="true" title="Halaman Tulisan belum dikonfigurasi">Tulisan</span>';
    }
    echo '</li></ul>';
}
