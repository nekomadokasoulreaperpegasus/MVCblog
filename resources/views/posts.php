<?php
defined('COMPONENT') or die('Access Denied.');
?>
<?php foreach(Model::listPosts() as $post):
	$date = $post->date;
	$date = strtotime($date);
	$date = strftime('%B %d, %Y', $date);
?>
	<div class="post">
		<h2>
			<a href="<?php echo 'post/' . $post->id; ?>">
				<?php echo $post->title; ?>
			</a>
		</h2>
		<p>
			<?php echo nl2br($post->content); ?>
		</p>
		<span>
			Posted by <?php echo $post->author . ' on ' . $date . '.'; ?>
		</span>
	</div>
<?php endforeach; ?>