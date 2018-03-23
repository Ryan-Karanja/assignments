<?php
/**
 * My Portfolio comments.php
 *
 * The template for displaying comments
 * This is the template that displays the area of the page
 * that contains both the current comments
 * and the comment form.
 *
 * @version 1.0
 * +----------------------------------------------------------------------+
 * post_password_required()
 * +----------------------------------------------------------------------+
 * have_comments()
 * +----------------------------------------------------------------------+
 * get_comments_number()
 * +----------------------------------------------------------------------+
 * get_the_title()
 * +----------------------------------------------------------------------+
 * comments_open()
 * +----------------------------------------------------------------------+
 * comments_form()
 * +----------------------------------------------------------------------+
 * wp_list_comments()
 * +----------------------------------------------------------------------+
 * the_comments_pagination()
 * +----------------------------------------------------------------------+
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( _____________________________ ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
		// If there are comments
		if ( ____________________ ) : ?>
			<h2 class="comments-title">

				<?php
				  // Get the number of comments
					$comments_number = _____________________;
					if ( 0 === $comments_number ) {
						// No replys yet: Concatinate msg with title
						echo 'Be the first to reply to ' . ______________________;
					} else {
						echo $comments_number . " reply's to " . _____________________;
					}
				?>

			</h2>

			<ol class="comment-list">
				<?php
					// List all the comments
					____________________( array(
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true,
						'reply_text'  => 'Join the conversation!',
					) );
				?>
			</ol>

			<?php
				// Add the comments pagination functions here
				_______________________________( array(
				  'prev_text' => 'Previous Comments',
					'next_text' => 'Next Comments',
				) );

		endif;

		// If comments are open
		if ( ______________ ){
			// Add the comments form
			______________________;
		}
	?>
</div><!-- /#comments -->
