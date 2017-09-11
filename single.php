<?php get_header(); ?>
<div id="page">
  <div id="breadcrumb">
    <p>
      <svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg>
      首頁 <?php get_the_breadcrumb(); ?>
    </p>
  </div>

  <article id="post-<?php the_id(); ?>" class="page-single" role="article">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <header><h2><?php the_title(); ?></h2></header>

    <section>
      <?php the_content(); ?>
    </section>

    <footer>
      <div id="author-info">
        <?php get_author_gravator(); ?>
        <div class="description">
          <h6>作者：<?php the_author_nickname(); ?></h6>
          <?php echo get_the_author_meta('description'); ?>
        </div>
      </div>
    </footer>
  <?php endwhile; endif; ?>
  </article>


  <?php get_sidebar(); ?>

  <?php comments_template(); ?>
</div>

<?php get_footer(); ?>
