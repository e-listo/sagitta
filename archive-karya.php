<?php get_header(); ?>
<main id="main" class="works-page">
  <header class="shell works-masthead"><p class="eyebrow">Arsip karya</p><h1>Karya visual</h1><p>Karya yang telah diterbitkan akan dihimpun di sini.</p></header>
  <section class="shell works-grid" aria-label="Daftar karya visual">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class('work-card'); ?>><a class="work-card-link" href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('large', array('loading' => 'lazy')); } ?><div class="work-card-copy"><p class="eyebrow"><?php echo esc_html(get_the_date('Y')); ?></p><h2><?php the_title(); ?></h2><?php if (has_excerpt()) : ?><p><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?></div></a></article>
  <?php endwhile; else : ?>
    <section class="works-empty"><p class="eyebrow">Arsip sedang disusun</p><h2>Belum ada karya visual yang diterbitkan.</h2><p>Karya yang siap dibagikan akan muncul di halaman ini.</p></section>
  <?php endif; ?>
  </section>
  <?php if (get_the_posts_pagination()) : ?><nav class="shell works-pagination" aria-label="Navigasi karya visual"><?php the_posts_pagination(array('mid_size' => 1, 'prev_text' => '← Lebih baru', 'next_text' => 'Lebih lama →')); ?></nav><?php endif; ?>
</main>
<?php get_footer(); ?>