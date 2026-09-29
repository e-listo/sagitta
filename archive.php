<?php get_header(); ?>
<main id="main" class="writing-page">
  <header class="shell writing-masthead"><p class="eyebrow">Arsip tulisan</p><h1><?php the_archive_title(); ?></h1><?php if (get_the_archive_description()) : ?><div class="archive-description"><?php the_archive_description(); ?></div><?php endif; ?></header>
  <section class="shell writing-list" aria-label="Daftar tulisan">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class('writing-entry'); ?>><p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p class="writing-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 36)); ?></p><a class="text-link" href="<?php the_permalink(); ?>">Baca tulisan <span aria-hidden="true">→</span></a></article>
  <?php endwhile; else : ?>
    <section class="writing-empty"><p class="eyebrow">Arsip belum dibuka</p><h2>Belum ada tulisan pada arsip ini.</h2></section>
  <?php endif; ?>
  </section>
  <?php if (get_the_posts_pagination()) : ?><nav class="shell writing-pagination" aria-label="Navigasi halaman tulisan"><?php the_posts_pagination(array('mid_size' => 1, 'prev_text' => '← Lebih baru', 'next_text' => 'Lebih lama →')); ?></nav><?php endif; ?>
</main>
<?php get_footer(); ?>
