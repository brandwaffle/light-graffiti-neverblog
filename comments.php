<?php
/**
 * @package WordPress
 * @subpackage Pretty_Spots
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<div id="comments">
	<?php if ('open' == $post->comment_status) : ?>
		<div id="respond">
			<h2>Leave A Reply</h2>
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>			
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
					<?php if ( $user_ID ) : ?>
						<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
					<?php else : ?>
						<p>
							<label for="author">Name</label>
							<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />
						</p>
						<p>
							<label for="email">Email (will not be published)</label>
							<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
						</p>
						<p>
							<label for="url">Website</label>
							<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />
						</p>
					<?php endif; ?>
					<p>
						<label for="comment">Comment</label>
						<textarea name="comment" id="comment" rows="10" cols="20"></textarea>
					</p>
					<p><input type="submit" value="Submit Comment" class="submit" /></p>
					<?php comment_id_fields(); ?>
					<?php do_action('comment_form', $post->ID); ?>
				</form>
			<?php endif; ?>
		</div>
	<?php endif; // if you delete this the sky will fall on your head ?>
	<h2>Comments</h2>
	<?php if ( have_comments() ) : ?>
		<?php foreach ($comments as $comment) : ?>		
			<div class="comment<?php if ($comment->user_id == 1) { echo ' admin'; } ?>" id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment, 32 ); ?>
				<div class="comment-text">
					<p class="comment-data"><?php comment_author_link(); ?> (<?php comment_date('M d, Y') ?>) <?php edit_comment_link(__("Edit This"), ' '); ?></p>
					<?php if ($comment->comment_approved == '0') : ?>
						<em>Your comment is awaiting moderation.</em><br />
					<?php endif; ?>
					<?php comment_text() ?>
				</div>
			</div>
		<?php endforeach; /* end for each comment */ ?>		
	<?php else : // this is displayed if there are no comments so far ?>
		<?php if ('open' == $post->comment_status) : ?>
			<!-- If comments are open, but there are no comments. -->
			<p>No comments yet, be the first to add one!</p>
		 <?php else : // comments are closed ?>
			<!-- If comments are closed. -->
			<p class="nocomments">Comments are closed.</p>
		<?php endif; ?>
	<?php endif; ?>
</div>

