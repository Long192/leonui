<?php
	$query = "select*from post where status = 1 and id = ".$_GET['id'];
	$result = $connect->query($query);
	$result=mysqli_fetch_array($result);
?>

<section class="content container">
	<h1 style="padding: 20px 0px;"><?=$result['title']?></h1>
	<br><br>
	<div><?= $result['content']; ?></div>
	<?php
		if (isset($_SESSION['user'])) {
			include "addcomments.php";
			include "comments.php";
		}else{
	?>
	<section class="text-center">
		<h3 style="margin-top: 10%;">Bình luận</h3>
		<b>Bạn cần <a href="?option=signin">đăng nhập</a> để thực hiện chức năng này</b>
	</section>
<?php 
	include "comments.php";
} ?>
</section>
