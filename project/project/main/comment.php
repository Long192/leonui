<?php 
	$comment = $_POST['comment'];
	$user = $_SESSION['user'];
	$postid = $_GET['id'];
	$query = "insert into comments (post_id, user, content) values ('$postid', '$user', '$comment')";
	$result = $connect->query($query);
	header('location:?option=menulist&id='.$postid);
?>