<?php while (have_posts()) : the_post(); ?>
<article id="post-<?php the_id();?>" class="posts-unit">
  <header>
    <h2>
      <?php if( is_sticky() ): ?>
        <span class="sticky">[置頂]</span>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
  </header>

  <figure>
    <!--picture-->
  </figure>

  <div class="summary"><?php the_content(''); ?></div>

  <footer>
    <span class="meta">
      by<?php the_author_nickname(); ?> /
      <time datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>／
      <?php the_category(',');?>
    </span>
  </footer>
</article>
<?php endwhile; ?>
