<?php
function cabinet_comments_template($comment, $args, $depth){
  $GLOBALS['comment'] = $comment;
  $default_author_img = get_bloginfo('template_url') . 'img/iauthor.png';
  ?>
  <li id="list-comment-<?php comment_ID();?>" <?php comment_class(); ?>>
    <div class="comment-body">
      <div class="comment-author-view">
        <?php echo get_avatar($comment, $size=50) ?>
        <div class="authormeta">
          <cite class="nickname"><?php comment_author_link(); ?></cite>
          <time datetime="<?php comment_date('Y-m-d'); ?>">
            <?php comment_date('Y-m-d'); ?> @ <?php comment_time(); ?>
          </time>
          <?php
           if ($comment->comment_approved == '0') :
              echo '<span class="unapproved">'. __('留言審核中...', 'Cabinet').'</span>';
           endif;
           ?>
        </div>
      </div>
      <div class="comment-text"><?php comment_text(); ?></div>
      <div class="reply">
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
    </div>
  </li>

<?php } ?>
