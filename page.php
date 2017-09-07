<?php get_header(); ?>
<div id="page">
  <div id="breadcrumb">
    <p>首頁/文章</p>
  </div>

  <article id="post-<?php the_id(); ?>" class="page-single" role="article">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <header><h1><?php the_title(); ?></h1></header>
    <section><?php the_content(); ?></section>

  <?php endwhile; endif; ?>
  </article>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
