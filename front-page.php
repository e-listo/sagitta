<?php get_header(); ?>
<main id="main">
  <section class="hero home-hero">
    <div class="shell home-hero-grid">
      <div>
        <p class="eyebrow">Sagitta — editorial space</p>
        <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
        <p class="lede">Ruang untuk karya visual, tulisan, dan proyek media yang diterbitkan dengan sengaja.</p>
        <div class="home-actions"><a class="button" href="#ruang">Jelajahi ruang</a><a class="text-link" href="#tulisan">Catatan terbaru <span aria-hidden="true">↓</span></a></div>
      </div>
      <?php $posts_page_id = (int) get_option('page_for_posts'); $writing_url = $posts_page_id ? get_permalink($posts_page_id) : home_url('/#tulisan'); ?>
      <aside class="edition-card"><p class="eyebrow">Edisi awal</p><p class="edition-number">00</p><p>Arsip sedang disusun. Setiap bagian akan diisi ketika karya dan konteksnya siap dibagikan.</p><ol><li><a href="<?php echo esc_url(get_post_type_archive_link('karya')); ?>"><span aria-hidden="true">01</span>Karya visual</a></li><li><a href="<?php echo esc_url($writing_url); ?>"><span aria-hidden="true">02</span>Tulisan</a></li><li><a href="<?php echo esc_url(get_post_type_archive_link('proyek')); ?>"><span aria-hidden="true">03</span>Proyek media</a></li></ol></aside>
    </div>
  </section>
  <section class="shell editorial-intro"><p class="eyebrow">Sebuah pengantar</p><h2>Bukan sekadar etalase, melainkan arsip yang tumbuh perlahan.</h2><p>Sagitta disiapkan untuk menempatkan karya bersama proses, waktu, dan konteksnya. Yang diterbitkan akan hadir ketika memang siap diberi tempat.</p></section>
  <section class="shell content-paths" id="ruang"><p class="eyebrow">Ruang yang disiapkan</p><h2>Tiga cara untuk menelusuri.</h2><div class="path-grid"><article><span>01</span><h3>Karya visual</h3><p>Citra, sketsa, dan karya yang akan hadir bersama detail serta catatan prosesnya.</p><small>Sedang disusun</small></article><article><span>02</span><h3>Tulisan</h3><p>Esai, cerita, dan catatan yang diterbitkan sebagai bagian dari arsip pemikiran.</p><a href="#tulisan">Telusuri tulisan ↗</a></article><article><span>03</span><h3>Proyek media</h3><p>Eksperimen dan jejak kerja lintas medium yang akan hadir secara bertahap.</p><small>Sedang disusun</small></article></div></section>
  <section class="home-writing" id="tulisan"><div class="shell"><p class="eyebrow">Tulisan terbaru</p><h2>Catatan yang telah hadir.</h2><div class="writing-grid"><?php $latest = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3, 'post_status' => 'publish')); if ($latest->have_posts()) : while ($latest->have_posts()) : $latest->the_post(); ?><article><p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p><a href="<?php the_permalink(); ?>">Baca tulisan →</a></article><?php endwhile; wp_reset_postdata(); else : ?><article class="empty-state"><p class="eyebrow">Arsip belum dibuka</p><h3>Tulisan pertama akan hadir di sini.</h3><p>Ketika diterbitkan, catatan terbaru akan muncul otomatis di bagian ini.</p></article><?php endif; ?></div></div></section>
  <section class="shell home-closing"><p class="eyebrow">Masih dalam proses</p><h2>Ruang ini belum selesai. Itu disengaja.</h2><p>Sagitta akan berkembang bersama karya yang memang siap untuk diberi tempat.</p></section>
</main>
<?php get_footer(); ?>