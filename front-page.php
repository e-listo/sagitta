<?php get_header(); ?>
<?php
$writing_url = sagitta_writing_url();
$counts = array(
    'karya' => (int) wp_count_posts('karya')->publish,
    'post' => (int) wp_count_posts('post')->publish,
    'proyek' => (int) wp_count_posts('proyek')->publish,
);
$total = array_sum($counts);
?>
<main id="main">
  <section class="hero home-hero">
    <div class="shell home-hero-grid">
      <div>
        <p class="eyebrow">Sagitta — editorial space</p>
        <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
        <p class="lede">Ruang untuk karya visual, tulisan, dan proyek media yang diterbitkan dengan sengaja.</p>
        <div class="home-actions"><a class="button" href="#ruang">Jelajahi ruang</a><a class="text-link" href="#tulisan">Catatan terbaru <span aria-hidden="true">↓</span></a></div>
      </div>
      <aside class="edition-card"><p class="eyebrow">Arsip terkurasi</p><p class="edition-number" aria-label="<?php echo esc_attr(sprintf('%d entri diterbitkan', $total)); ?>"><?php echo esc_html(str_pad((string) $total, 2, '0', STR_PAD_LEFT)); ?></p><p><?php echo esc_html(sprintf('%d entri telah diterbitkan dalam ruang Sagitta.', $total)); ?></p><ol><li><a href="<?php echo esc_url(get_post_type_archive_link('karya')); ?>"><span aria-hidden="true">01</span>Karya visual · <?php echo esc_html($counts['karya']); ?></a></li><li><a href="<?php echo esc_url($writing_url); ?>"><span aria-hidden="true">02</span>Tulisan · <?php echo esc_html($counts['post']); ?></a></li><li><a href="<?php echo esc_url(get_post_type_archive_link('proyek')); ?>"><span aria-hidden="true">03</span>Proyek media · <?php echo esc_html($counts['proyek']); ?></a></li></ol></aside>
    </div>
  </section>
  <section class="shell editorial-intro"><p class="eyebrow">Sebuah pengantar</p><h2>Bukan sekadar etalase, melainkan arsip yang tumbuh perlahan.</h2><p>Sagitta menempatkan karya bersama proses, waktu, dan konteksnya. Setiap entri diterbitkan ketika siap dibagikan.</p></section>
  <section class="shell content-paths" id="ruang"><p class="eyebrow">Jelajahi arsip</p><h2>Tiga cara untuk menelusuri.</h2><div class="path-grid"><article><span>01</span><h3>Karya visual</h3><p>Citra, sketsa, dan karya bersama detail serta catatan prosesnya.</p><a href="<?php echo esc_url(get_post_type_archive_link('karya')); ?>">Jelajahi karya visual ↗</a></article><article><span>02</span><h3>Tulisan</h3><p>Esai, cerita, dan catatan yang diterbitkan sebagai bagian dari arsip pemikiran.</p><a href="<?php echo esc_url($writing_url); ?>">Jelajahi tulisan ↗</a></article><article><span>03</span><h3>Proyek media</h3><p>Eksperimen dan jejak kerja lintas medium yang dibagikan dalam arsip.</p><a href="<?php echo esc_url(get_post_type_archive_link('proyek')); ?>">Jelajahi proyek media ↗</a></article></div></section>
  <section class="home-writing" id="tulisan"><div class="shell"><p class="eyebrow">Tulisan terbaru</p><h2>Catatan yang telah hadir.</h2><div class="writing-grid"><?php $latest = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'post_status' => 'publish')); if ($latest->have_posts()) : while ($latest->have_posts()) : $latest->the_post(); ?><article><p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p><a href="<?php the_permalink(); ?>">Baca tulisan →</a></article><?php endwhile; wp_reset_postdata(); else : ?><article class="empty-state"><p class="eyebrow">Belum ada tulisan terbit</p><h3>Belum ada tulisan yang diterbitkan.</h3></article><?php endif; ?></div></div></section>
  <section class="shell home-closing"><p class="eyebrow">Arsip terkurasi</p><h2>Ruang yang bertumbuh bersama karya.</h2><p>Karya, tulisan, dan proyek media diterbitkan ketika siap dibagikan.</p></section>
</main>
<?php get_footer(); ?>