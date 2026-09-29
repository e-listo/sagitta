<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main">Lewati ke isi</a>
<header class="site-header" id="site-header">
  <div class="shell header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>, beranda">
      <span class="brand-mark">BJS</span>
      <span class="brand-copy"><strong>SAGITTA</strong><small>sagitta.my.id</small></span>
    </a>
    <button class="menu-toggle" type="button" aria-controls="primary-nav" aria-expanded="false"><span class="screen-reader-text">Buka menu</span><span aria-hidden="true">Menu</span></button>
    <nav class="primary-nav" id="primary-nav" aria-label="<?php esc_attr_e('Navigasi utama', 'sagitta'); ?>">
      <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'fallback_cb' => 'sagitta_menu_fallback')); ?>
    </nav>
  </div>
</header>
