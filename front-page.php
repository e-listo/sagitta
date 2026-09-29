<?php get_header(); ?>
<main id="main">
  <section class="hero">
    <div class="hero-orb hero-orb-one"></div><div class="hero-orb hero-orb-two"></div>
    <div class="shell hero-grid">
      <div>
        <p class="eyebrow">Vol. 00 — Editorial space</p>
        <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
        <p class="hero-copy">Ruang untuk karya visual, tulisan, dan proyek media yang disusun dengan pelan dan diterbitkan dengan sengaja.</p>
        <a class="button" href="#archive">Jelajahi arsip</a>
      </div>
      <aside class="status-card"><p class="eyebrow">Sedang disusun</p><ol><li>Visual works</li><li>Written works</li><li>Media projects</li></ol></aside>
    </div>
  </section>
  <section class="shell introduction" id="archive">
    <p class="eyebrow">Tentang ruang ini</p>
    <h2>Tempat kalimat bertemu bidang gambar.</h2>
    <p>Arsip Sagitta akan bertumbuh melalui karya yang benar-benar siap dibagikan. Konten awal dapat ditambahkan melalui Dasbor WordPress setelah struktur editorial disiapkan.</p>
  </section>
  <section class="shell latest">
    <div class="section-heading"><div><p class="eyebrow">Tulisan terbaru</p><h2>Catatan yang baru hadir.</h2></div><a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">Lihat semua tulisan</a></div>
    <div class="post-grid">
    <?php $latest = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3)); if ($latest->have_posts()) : while ($latest->have_posts()) : $latest->the_post(); ?>
      <article <?php post_class('post-card'); ?>><p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p></article>
    <?php endwhile; wp_reset_postdata(); else : ?>
      <p class="empty-state">Belum ada tulisan diterbitkan.</p>
    <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
