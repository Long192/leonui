<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
	<h1 style="padding:1%;" class="text-center">Trang quản trị admin</h1>
	<div class="container"> 
	 <div class="row"> 
	  <div class="col-md-10 col-md-offset-1"> 
	   <div class="panel panel-default panel-table"> 
	    <div class="panel-heading"> 
	     <div class="row"> 	
	     <div class="col col-xs-4 text-left">
	      	<h4 style="margin-top: 3px; height: 25px; width: 250px;">Hello: <?= $_SESSION['admin'] ?></h4>
	      	<a href="?option=logout"><button type="button" style="background: red; color:black;">Logout</button></a>
	      </div> 
	      <div class="col col-xs-4" style="padding-top: 1%;">
	      	<form method="get" action="" autocomplete="off">
				<input type="hidden" value="search" name="option">
				<input class="sb-text" type="text" placeholder="Tìm kiếm..." name="keyword">
				<input class="sb-sbm" type="submit" value="tìm kiếm">
			</form>
	      </div>
	      <div class="col col-xs-4 text-right"> 
	       <a href="?option=edit"><button type="button" class="btn btn-sm btn-primary btn-create m-1">edit</button></a>
	       <a href="?option=new"><button type="button" class="btn btn-sm btn-primary btn-create m-1">Thêm mới</button></a>
	       <a href="?option=create"><button type="button" class="btn btn-sm btn-primary btn-create m-1">tạo tài khoản admin</button></a> 
	       <a href="?option=comment"><button type="button" class="btn btn-sm btn-primary btn-create m-1">quản lý comment</button></a>
	       
	      </div>
	     </div> 
	    </div> 
	    <div class="panel-body"> 
	    	<?php include "router.php" ?>
	    </div> 
	   </div> 
	  </div> 
	 </div>
	</div>