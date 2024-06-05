<?php
	if (isset($_POST['username'])){
		$username=$_POST['username'];
		$query="select*from admin where username = '$username'";
		$result = $connect->query($query);
		if(mysqli_num_rows($result)!=0) {
			$alert="tên đăng nhập đã tồn tại";
		}else{
			$password = md5($_POST['password']);
			$email = $_POST['email'];
			$query = "insert admin(username, password, email)values('$username', '$password', '$email')";
			$connect->query($query);
			$alert = "Bạn đã tạo thành công tài khoản admin mới";
		}
	}
?>
<form method="post" autocomplete="off">
	<section style="color: red; font-size: 24px; text-align: center;"><?=isset($alert)?$alert:""?></section>
	<div style="margin: 5% 30%;">
		<div>
			<div>
				<label>Tên Admin:</label>
				<input type="text" name="username" required style="margin-left: 94px;">
			</div>
			<div>
				<label>Mật Khẩu:</label>
				<input type="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Phải chứa ít nhất một số và một chữ hoa và chữ thường và ít nhất 8 ký tự trở lên" style="margin-left: 102px; margin-top: 10px;">
			</div>
			<div>
				<label>Nhập Lại Mật Khẩu:</label>
				<input type="password" name="password" required style="margin-left: 40px; margin-top: 10px;">
			</div>
			<div>
				<label>Nhập Email:</label>
				<input type="email" name="email" required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="yêu cầu nhập đúng định dạng email" style="margin-left: 89px; margin-top: 10px;">
			</div>
			<div>
				<input type="submit" value="Đăng Kí" style="margin-left: 173px; margin-top: 10px; background: #ed4564">
			</div>
		</div>
	</div>	
</form>
