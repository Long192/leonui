<?php
	if (isset($_POST['editor1'])) {
		$title = $_POST['title'];
		$content = $_POST['editor1'];
		$writer = $_SESSION['admin'];
		$query = "update post set title='$title', content='$content' where id=".$_GET['id'];
		$result = $connect->query($query);
		header("location: ?option=edit");
	}
?>
<?php
	$query="select*from post where id=".$_GET['id'];
	$result=$connect->query($query);
	$result=mysqli_fetch_array($result);
?>

<div>
	<form method="post">	
		<td>
			<div style="font-size: 24px; text-align: center;">title:</div>			
			<textarea cols="70" rows="3" name="title" style="resize: none; font-size: 24px;"><?=$result['title']?></textarea>
		</td>
		<td>
			<textarea id="editor1" name="editor1"  required="true"><?=$result['content']?></textarea>
			<input type="submit" value="Sửa" style="text-align: center; padding: 1% 3%; margin: 2% 45%" >
		</td>
	</form>
</div>
