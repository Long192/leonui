<?php
	if (isset($_POST['username'])){
		$username=$_POST['username'];
		$query="select*from user where username = '$username'";
		$result = $connect->query($query);
		if(mysqli_num_rows($result)!=0) {
			$alert="tên đăng nhập đã tồn tại";
		}else{
			$password = md5($_POST['password']);
			$email = $_POST['email'];
			$query = "insert user(username, password, email)values('$username', '$password', '$email')";
			$connect->query($query);
			$alert = "bạn đã đăng kí thành công";
		}
	}
	
?>


<h1 class="text-center text-warning" style="padding: 20px;">ĐĂNG KÍ</h1>
<div class="text-center text-danger" style="margin-top: 20px;">
	<section style="color: red; font-weight: bold; font-size: 20px; text-align: center;"><?=isset($alert)?$alert:""?></section>
	<form method="post", onsubmit="if(repassword.value!=password.value){alert('điền lại mật khẩu không khớp');repassword.select(); return false;}" autocomplete="off">
		<section class="regis">
			<label>chọn tên đăng nhập: </label>
			<br>
			<input type="text" name="username" required="true" minlength="3">
		</section>
		<section class="regis">
			<label>Mật khẩu: </label>
			<br>
			<input type="password" name="password" required="true" minlength="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên">
		</section>
		<section class="regis">
			<label>Nhập lại mật khẩu: </label>
			<br>
			<input type="password" name="repassword" required="true" minlength="6">
		</section>
		<section class="regis">
			<label>email: </label>
			<br>
			<input type="email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="cần nhập đúng định dạng email">
		</section>
		<section style="padding: 5% 0%;">
			<input type="submit" value="Đăng kí" style="padding: 0.5% 1.5%;">
		</section>
	</form>
</div>