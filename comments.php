<?php
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
?>

<?php
	if ( comments_open() ):
   echo '<section id="comments">';
		if ( post_password_required()):
			echo '<div id="comments-inner">
							<p class="nopassword">'.
									__('本文受到密碼保護，輸入後方可觀看。', 'Cabinet').
							'</p>
						</div>';
			return;
		endif;
    echo '</section>';
	endif;
?>

<!--Comment List-->
<?php if (have_comments()) : ?>
  <div class="comment-inner">
    <header>
      <p><?php comments_number('0' , '1', '%');  ?>則回應</p>
    </header>
    <ol id="comments-list">
  		<?php wp_list_comments(array ('type' => 'comment',
																		'callback'=>'cabinet_comments_template')); ?>
    </ol>
  </div>
<?php endif; ?>
<?php if ( get_comment_pages_count() > 1  ) :?>
		<div class="pagination">
			<?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;') );?>
		</div>
<?php endif; ?>

<!-- Comment Form -->
<?php
	$fields = array(
			'author' => '<div class="comfield"><label for="author">名稱' . ( $req ? '<span class="required">*</span>' : '' ).'</label>
			<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" /></div>',

			'email' => '<div class="comfield"><label for="email">信箱' . ($req ? '<span class="required">*</span>' : '' ) . '</leabel>
			<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_email'] ) . '" /></div>',

			'url' => '<div class="comfield"><label for="url">個人網站</label>' .
			'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_url']) . '" /></div>',
	);
	$puzzle_fields = array(
			'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea></p>',
			'id_form'              => 'commentform',
			'id_submit'            => 'submit',
			'title_reply'          => __( '發表留言' ),
			'cancel_reply_link'    => __( '取消' ),
			'label_submit'         => __( '送出留言' ),
			'comment_notes_before' => '',
			'comment_notes_after'  => ''
	);

	comment_form($puzzle_fields);
 ?>

</section>
