<?php get_header(); ?>
<main id="main" class="shell archive-main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article <?php post_class('entry-card'); ?>>
  <p class="eyebrow"><?php echo esc_html(get_the_date()); ?></p>
  <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div class="entry-summary"><?php the_excerpt(); ?></div>
</article>
<?php endwhile; the_posts_pagination(); else : ?>
<p><?php esc_html_e('Belum ada konten untuk ditampilkan.', 'sagitta'); ?></p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
