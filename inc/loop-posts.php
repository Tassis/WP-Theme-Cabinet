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
  </div>

  <div class="summary"><?php the_content(''); ?></div>

  <footer>
    <span class="meta">
      <span class="icon icon-user"></span>
      <span class="metainfo"><?php the_author_nickname(); ?></span> ||
      <span class="icon icon-calendar"></span>
      <time datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time> ||
      <?php the_category(',');?>
    </span>

    <?php if( strpos( $post->post_content, '<!--more-->' ) ):   ?>
      <span class="more-link">
        <a href="<?php the_permalink();?>">→繼續閱讀←</a>
      </span>
    <?php endif; ?>
  </footer>
</article>
<?php endwhile; ?>
