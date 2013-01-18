<?php
defined('COMPONENT') or die('Access Denied.');

$id = Controller::getPost();
$post = Model::getPost($id);

//var_dump($post);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once('header.php'); ?>
	</head>
	<body>
		<!--Check if the post exists.-->
		<?php if(!is_null($post) && $id != -1):
			//Format the time.
			$date = $post->date;
			$date = strtotime($date);
			$date = strftime('%B %d, %Y', $date);
		?>
			<!--Display the post information.-->
			<div class="post">
				<h2>
					<a href="/<?php echo Controller::getConfig('dir'); ?>">
						&larr;
					</a>
					<?php echo $post->title; ?>
				</h2>
				<!--The function nl2br replaces all new line characters with <br />.-->
				<p>
					<?php echo nl2br($post->content); ?>
				</p>
				<span>
					Posted by <?php echo $post->author . ' on ' . $date . '.'; ?>
				</span>
			</div>
			<!--Display any comments and the comment form.-->
			<div id="comments">
				<h2>Comments</h2>
				<?php
				require 'comments.php';
				?>
			</div>
		<?php else: ?>
			<h2>Sorry. This page doesn't exist.</h2>
		<?php endif; ?>
	</body>
</html>
