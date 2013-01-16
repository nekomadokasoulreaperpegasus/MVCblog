<?php
//If somebody is trying to directly access this file.
defined('COMPONENT') or die('Access Denied.');

class Model {
	//List all the posts on the blog.
	public static function listPosts(){
		$query = 'SELECT * FROM posts ORDER BY id DESC';

		$result = DB::query($query, null, PDO::FETCH_OBJ);

		return $result;
	}

	//Get the post with the specified id.
	public static function getPost($id){
		$query = 'SELECT * FROM posts WHERE id = :id ORDER BY id DESC LIMIT 1';

		$result = DB::queryObj($query, array('id' => $id))->fetchObject();

		return $result;
	}

	//Get the comments associated with the post id.
	public static function getComments($id){
		$query = 'SELECT name, comment FROM comments WHERE post = :id ORDER BY id DESC';

		$result = DB::query($query, array('id' => $id), PDO::FETCH_OBJ);

		return $result;
	}

	//Add a comment to the post with the specified id.
	public static function addComment(){
		//Check to see if an attempt to comment was made.
		if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
			$query = 'INSERT INTO comments (name, email, comment, post) VALUES(:name, :email, :comment, :post)';

			$id = Controller::getPost();

			DB::query($query, array(
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'comment' => $_POST['comment'],
				'post' => $id
			), PDO::FETCH_BOTH);

			return true;
		}

		return false;
	}
}
?>