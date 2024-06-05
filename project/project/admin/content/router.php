<?php
			if (isset($_GET['option'])) {
				switch ($_GET['option']) {
					case 'edit':
						include "edit.php";
						break;
					case 'new':
						include "new.php";
						break;
					case 'create':
						include "createadmin.php";
						break; 
					case 'repair':
						include "repair.php";
						break;
					case 'delete':
						$query="select * from post where status=1 and id=".$_GET['id'];
						$result=$connect->query($query);
						if(mysqli_num_rows($result)!=0){ 
							$connect->query("update post set status=0 where id=".$_GET['id']);
						}else{	
							$connect->query("delete from post where id=".$_GET['id']);
							$connect->query("delete from comments where post_id = ".$_GET['id']);
						}
						header("location: ?option=edit");
						break;
					case 'logout':
						unset($_SESSION['admin']);
						header('location: .');
						break;
					case 'comment':
						include "commentview.php";
						break;
					case 'delete-comment':
						$query1="select * from comments where status=1 and id=".$_GET['id'];
						$result1=$connect->query($query1);
						if(mysqli_num_rows($result1)!=0){ 
							$connect->query("update comments set status=0 where id=".$_GET['id']);
						}else{	
							$connect->query("delete from comments where id=".$_GET['id']);
						}
						header("location: ?option=comment");
						break;
					case 're-up':
						$query="update post set status = 1 where id = ".$_GET['id'];
						$result=$connect->query($query);
						header('location: ?option=edit');
						break;
					case 're-up-comment':
						$query="update comments set status = 1 where id = ".$_GET['id'];
						$result=$connect->query($query);
						header('location: ?option=comment');
						break;
					case 'search':
						include "search.php";
						break;
					
				}
			}else{
				include "edit.php";
			}
		?>