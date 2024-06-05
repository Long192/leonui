<?php 
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query = "select*from user where username = '$username' and password = '$password'";
		$result = $connect -> query($query);
		if (mysqli_num_rows($result)==0) {
			$arlert = 'sai tên đăng nhập hoặc mật khẩu';
		}else{
			$result = mysqli_fetch_array($result);
			$_SESSION['user'] = $username;
			header("location: .");
		}
	}
?>
<h1 class="text-warning text-center" style="padding: 20px;">Đăng nhập tài khoản</h1>
<div class="text-center text-danger"><?= isset($arlert)?$arlert:""?></div>
<div class="text-light text-center">
	<form method="post">
		<section class="regis">
			<label>tài khoản: </label>
			<input type="text" name="username" required="true">
		</section>
		<br>
		<section class="regis">
			<label>mật khẩu: </label>
			<input type="password" name="password" required="true">
		</section>
		<br>
		<section style="padding: 5% 0%;">	
			<input type="submit" value="Đăng nhập" style="padding: 0.5% 1.5%;">
		</section>
	</form>
</div>