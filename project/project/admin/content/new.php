<?php
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
		$content = $_POST['editor1'];
		$writer = $_SESSION['admin'];
		$query = "insert post(writer, title, content)values('$writer', '$title', '$content')";
		$result = $connect->query($query);
		$alert = "đăng bài thành công";
	}
?>
<form method="post">
	<h2 style="color: red; text-align: center;"><?= isset($alert)?$alert:''; ?></h2>
	<div style="margin: 2%;">
		<div style="font-size: 24px; text-align: center;">title:</div>				
		<div class="text-center"><textarea cols="70" rows="3" name="title" style="resize: none; font-size: 24px;" required="true"></textarea></div>
	</div>
	<div>
		<textarea id="editor1" name="editor1" required="true"></textarea>
		<input type="submit" value="đăng bài" style="text-align: center; padding: 1% 3%; margin: 2% 45%" >
	</div>
</form>
