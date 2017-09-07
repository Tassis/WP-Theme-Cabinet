<?php

function get_author_gravator(){
  $author = get_the_author_meta('email');
  echo get_avatar($author, $size="100");
}

/* Custom function */
function get_the_breadcrumb()
{
  if (!is_home())
  {    echo ' / '; }
  if (is_category() || is_single())
  {
    the_category(' / ');
    if (is_single())
    {  echo ' / ';   the_title();   }
  }elseif(is_page()){
    the_title();
  }
}


function posts_pagenavi()
{
    global $wp_query, $wp_rewrite;
    $current = $wp_query->query_vars['paged'] > 1 ? $wp_query->query_vars['paged'] :  1;

    $pagination = array(
    'base' => @add_query_arg('page', '%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'prev_next' => false,
    'mid_size' => 3,
   );

  if( empty($wp_query->query_vars['s']) ){
      if( $wp_rewrite->using_permalinks() ){
          $pagination['base'] = user_trailingslashit(trailingslashit(get_pagenum_link(1)) . 'page/%#%/', 'paged');
      }
  } else {
      $pagination['base'] = str_replace('/page/' . $current, '/', $pagination['base']);
      if( $wp_rewrite->using_permalinks() ) {
          $pagination['base'] = remove_query_arg(array('s', 'submit', 'page'), str_replace('%#%', '%@%', $pagination['base']));
          $pagination['base'] = user_trailingslashit(trailingslashit($pagination['base']) . 'page/%#%/', 'paged');
          $pagination['add_args'] = array('s' => get_query_var('s'));
      }
  }
  echo paginate_links($pagination);
}


?>
