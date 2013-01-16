<?php
defined('COMPONENT') or die('Access Denied.');
?>
<!--If the comment form was submitted. Add the comment.-->
<?php if(Model::addComment()): ?>
	<div id="notif">Your comment has been added.</div>
<?php endif; ?>
<form method="POST" action="<?php echo Controller::getURI()->getOriginal(); ?>">
	<input type="text" name="name" placeholder="Name" required="true" />
	<input type="email" name="email" placeholder="example@email.com" required="true" />
	<textarea name="comment" placeholder="Your comment..." required="true" ></textarea>
	<button type="submit">Submit</button>
	<div class="clear"></div>
</form>