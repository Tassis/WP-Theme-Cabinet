<?php get_header(); ?>
<div id="page">
  <!--Slider-->
  <div id="slider-box">

  </div>

  <div id="post-list" role="main">
    <?php if(have_posts()): ?>
        <?php get_template_part('inc/loop','posts'); ?>
        <div class="page-navi">
           <div class="nav-link prev-link"><?php previous_posts_link(); ?> </div>
           <nav class="nav-num-list"><?php posts_pagenavi(); ?></nav>
           <div class="nav-link next-link"><?php next_posts_link(); ?></div>
        </div>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
