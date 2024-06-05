<section class="text-center">
	<h3 style="margin-top: 10%;">bình luận</h3>
	<section class="text-left" style="margin: 3% 10%; font-size: 24px;">
		 <?= $_SESSION['user']; ?>
	</section>
	<form method="post" action="?option=insert-comment&id=<?=$_GET['id']?>">
		<textarea cols="120" rows="5" placeholder="nội dung bình luận" style="padding: 1%;" name="comment" required="true"></textarea>
		<br>
		<input type="submit" value="bình luận">
	</form>
</section>