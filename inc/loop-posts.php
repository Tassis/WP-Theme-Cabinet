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

  <div class="featured-thumbnail">
    <!--picture-->
      <a href="<?php the_permalink(); ?>"><?php get_postmeta_thumbnail( get_the_ID() ); ?></a>
  </div>

  <div class="summary"><?php the_content(''); ?></div>

  <footer>
    <span class="meta">
      <svg class="icon icon-user"><use xlink:href="#icon-user"></use></svg>
      <span class="metainfo"><?php the_author_nickname(); ?></span> |
      <svg class="icon icon-calendar"><use xlink:href="#icon-calendar"></use></svg>
      <time datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time> |
      <svg class="icon icon-category"><use xlink:href="#icon-category"></use></svg>
      <?php the_category(',');?>
    </span>

    <?php if( strpos( $post->post_content, '<!--more-->' ) ):   ?>
      <span class="more-link">
        <svg class="icon icon-forward"><use xlink:href="#icon-forward"></use></svg>
        <a href="<?php the_permalink();?>">繼續閱讀</a>
      </span>
    <?php endif; ?>
  </footer>
</article>
<?php endwhile; ?>
