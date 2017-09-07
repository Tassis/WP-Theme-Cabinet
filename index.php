<?php get_header(); ?>
<div id="page">
  <!--Slider-->
  <div id="slider">

  </div>

  <div id="posts-list" role="main">
    <?php if(have_posts()): ?>
        <?php get_template_part('inc/loop','posts'); ?>
        <div class="page-navi"><?php posts_pagenavi(); ?></div>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
