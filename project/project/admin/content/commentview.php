<?php
	$query="select * from comments";
	$result=$connect->query($query);
?>
<h1 class="text-center">Tất cả comment</h1>
<table class="table table-striped table-bordered table-list"> 
	<thead>
		<tr style="width: 75%;">
			<th>id</th>
			<th>post_id</th>
			<th>user</th>
			<th>content</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($result as $item):?>
			<tr>
				<td><?=$item['id']?></td>
				<td><?=$item['post_id']?></td>
				<td><?=$item['user']?></td>
				<td><?=$item['content']?></td>
				<td><?=$item['status']==1?'Hiện':'Ẩn'?></td>
				<td><a onclick=" return confirm('Bạn muốn xóa !');" href="?option=delete-comment&id=<?=$item['id']?>" class="btn btn-danger"><em class="fa fa-trash"></em></a>   <a href="?option=re-up-comment&id=<?=$item['id']?>"><?=$item['status']==0?'<div class="btn btn-default"><i class="far fa-arrow-square-up"></i></div>':''?></a></td>
			</tr>
		<?php endforeach;?>
	</tbody>
