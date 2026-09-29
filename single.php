<?php get_header(); ?>
<main id="main" class="single-writing">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>><header class="shell single-writing-header"><p class="eyebrow">Tulisan · <?php echo esc_html(get_the_date()); ?></p><h1><?php the_title(); ?></h1><?php if (has_excerpt()) : ?><p class="single-deck"><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?></header>
  <div class="single-writing-body"><?php the_content(); ?></div>
  <footer class="shell single-writing-footer"><p class="eyebrow">Akhir tulisan</p><?php the_post_navigation(array('prev_text' => '<span class="nav-label">Sebelumnya</span><span class="nav-title">%title</span>', 'next_text' => '<span class="nav-label">Berikutnya</span><span class="nav-title">%title</span>')); ?></footer></article>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
