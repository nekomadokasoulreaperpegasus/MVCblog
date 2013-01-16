<?php
defined('COMPONENT') or die('Access Denied.');

//Load the comment form.
require 'comment_form.php';

//Get the post id.
$id = Controller::getPost();
?>
<!--Load every comment.-->
<?php foreach(Model::getComments($id) as $comment): ?>
	<div class="comment">
		<span class="cauthor">Posted by <?php echo $comment->name; ?></span>
		<p class="ccomment"><?php echo nl2br($comment->comment); ?></p>
	</div>
<?php endforeach; ?>