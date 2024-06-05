<?php
	if (isset($_GET['option'])) {
		switch ($_GET['option']) {
			case 'menulist':
				include "content/menulist.php";
				break;
			case 'home':
				include "content/home.php";
				break;
			case 'signin':
				include "signin.php";
				break;
			case 'register':
				include "register.php";
				break;
			case 'logout':
				unset($_SESSION['user']);
				header('location: .');
				break;
			case 'search':
				include "search.php";
				break;
			case 'insert-comment':
				include "comment.php";
				break;
		}
	}else{
		include "content/home.php";
	}
?>