<?php get_header(); ?>
<main id="main" class="single-work">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>><header class="shell single-work-header"><p class="eyebrow">Proyek media · <?php echo esc_html(get_the_date('Y')); ?></p><h1><?php the_title(); ?></h1><?php if (has_excerpt()) : ?><p class="single-work-deck"><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?></header>
  <?php if (has_post_thumbnail()) : ?><figure class="shell work-featured-image"><?php the_post_thumbnail('full'); ?></figure><?php endif; ?>
  <div class="single-work-body"><?php the_content(); ?></div>
  <footer class="shell single-work-footer"><p class="eyebrow">Akhir proyek</p><?php the_post_navigation(array('prev_text' => '<span class="nav-label">Sebelumnya</span><span class="nav-title">%title</span>', 'next_text' => '<span class="nav-label">Berikutnya</span><span class="nav-title">%title</span>')); ?></footer></article>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>