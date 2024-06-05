
 	

<?php
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query = "select * from admin where username='$username' and password='$password'";
		$result=$connect->query($query);
		if (mysqli_num_rows($result)==0) {
			$alert="Sai tên đăng nhập hoặc mật khẩu!";
		}else{
			$result= mysqli_fetch_array($result);
			$_SESSION['admin']=$username;
			header("location: .");
		}
	}
?>
<div class="container" style="background-color: #e4edec; opacity: 0.9">
	<h1 style="text-align: center; color: #248cbf; padding-top: 3%">Đăng nhập tài khoản Admin</h1>
	<section class="text-center text-danger" style="font-size: 18px; padding-top: 2%;"><?=isset($alert)?$alert:""?></section>
	<form method="post">
		<div style="margin: 10% 40% 20%	; display: inline-block; ">
			<label style="color: black;">Tên Admin</label>
			<input type="text" name="username" required>
			<br>
			<label style="color: black;">Mật Khẩu</label>
			<input type="password" name="password" required>
			<br>
			<input type="submit" value="Đăng Nhập" style="background: #39b0e3;margin: 20% 20% 0% 20%;"></td>
		</div>	
	</form>
</div>


