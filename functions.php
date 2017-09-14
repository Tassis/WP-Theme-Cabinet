<?php
  get_template_part('inc/cabient', 'function');
  get_template_part('inc/cabient', 'comments');

  if (is_admin()){
    get_template_part('inc/metaboxes/metabox', 'function');


  }

  $sidebar_data = array(
    'id' => 'sidebar',
    'name' => '側邊欄',
    'before_widget' => '<section class="side-widget">',
    'after_widget' => '</section>',
    'before_title' => '<h4 class="side-widget-title">',
    'after_title' => '</h4>',
  );

  $footerbar_left_data = array(
    'id' => 'footer-bar-left',
    'name' => 'footer(left)',
    'before_widget' => '<section class="footer-widget">',
    'after_widget' => '</section>',
    'before_title' => '<h4 class="footer-widget-title">',
    'after_title' => '</h4>',
  );

  $footerbar_center_data = array(
    'id' => 'footer-bar-center',
    'name' => 'footer(center)',
    'before_widget' => '<section class="footer-widget">',
    'after_widget' => '</section>',
    'before_title' => '<h4 class="footer-widget-title">',
    'after_title' => '</h4>',
  );

  $footerbar_right_data = array(
  'id' => 'footer-bar-right',
  'name' => 'footer(right)',
  'before_widget' => '<section class="footer-widget">',
  'after_widget' => '</section>',
  'before_title' => '<h4 class="footer-widget-title">',
  'after_title' => '</h4>',
);

  /* Apply wordpress's default setting.*/
  function remove_more_link_scroll( $link ) {
    $link = preg_replace( '|#more-[0-9]+|', '', $link );
    return $link;
  }
  function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Your Read More Link Text</a>';
  }
  function search_filter($query) {
    if ($query->is_search) {
      $query->set('post_type', 'post');
    }
    return $query;
  }

  add_filter( 'the_content_more_link', 'modify_read_more_link' );
  add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
  add_filter('pre_get_posts','search_filter');

  /* Register Components */
  register_nav_menu( 'main-menu-bar', '主要導航');
  register_sidebar($sidebar_data);
  register_sidebar($footerbar_left_data);
  register_sidebar($footerbar_center_data);
  register_sidebar($footerbar_right_data);
?>
