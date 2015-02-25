<?php
if ( post_password_required() ) : 
?>
<div id="comments">
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyten' ); ?></p>
</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<div id="comments">
	<div class="commentform">
		<h2>Comentários</h2>
		<form id="commentform" method="post" action="<?php bloginfo('url'); ?>/wp-comments-post.php">
			<label for="author">Nome</label>
			<input type="text" aria-required="true" size="30" value="" name="author" id="author">

			<label for="email">Email</label>
			<input type="text" aria-required="true" size="30" value="" name="email" id="email">

			<label for="comment">Mensagem</label>
			<textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>

			<input type="submit" value="Enviar comentário" id="submit" name="submit">
			<input type="hidden" id="comment_post_ID" value="17" name="comment_post_ID">
			<input type="hidden" value="0" id="comment_parent" name="comment_parent">
			<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
		</form>
	</div>

<?php
if ( have_comments() ) :
?>
	<ol class="commentlist">
		<?php wp_list_comments() ?>
	</ol>

<?php
else : // or, if we don't have comments:
	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */

	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
<?php 
	endif; // end ! comments_open() 
endif; // end have_comments() ?>

<?php //comment_form(); ?>

</div><!-- #comments -->
