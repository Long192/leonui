	<div class="container">
		<div class="row">
			<a href="?option=home"><img src="img/logo.jpg"></a>
			<div class="search-box">
				<form method="get" action="" autocomplete="off">
					<input type="hidden" value="search" name="option">
					<input class="sb-text" type="text" placeholder="Tìm kiếm..." name="keyword">
					<input class="sb-sbm" type="submit">
				</form>
			</div>
			<?php if (!isset($_SESSION['user'])) {?>
				<nav>
					<ul class="main-menu">
						<li><a href="?option=signin">Đăng nhập</a></li>
						<li><a href="?option=register">Đăng kí</a></li>
					</ul>
				</nav>
			<?php } else{?>
				<nav class="main-menu" style="font-size: 24px; margin-left: 150px;">
					hello: <?= $_SESSION['user']; ?><a href="?option=logout" class="fas fa-sign-out-alt user"></a>
				</nav>
			<?php }?>
		</div>
	</div>
