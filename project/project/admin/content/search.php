<?php
	if (isset($_GET['keyword'])){
?>
	<section class="content">
		<h1 class="text-center">KẾT QUẢ TÌM KIẾM</h1>
		<ul class="option">
		<?php
			$total=$connect->query('select * from post where status = 1');
			$total=mysqli_num_rows($total);
			$page=1;
			if (isset($_GET['page'])) {
				$page=$_GET['page'];
			}
			$contentperpage = 5;
			$offset = ($page * $contentperpage) - $contentperpage;
			$totalpage = ceil($total/$contentperpage);
			$query = "select*from post where status = 1 and title like '%".$_GET['keyword']."%' limit $offset, $contentperpage ";
			$result=$connect->query($query);
			?>
			<br>
<table class="table table-striped table-bordered table-list"> 
	<thead> 
	    <tr> 
	  	    <th class="hidden-xs">Id</th> 
	        <th>Writer</th> 
	        <th>Title</th>
	        <th>Status</th>
	        <th>Action</th> 
	    </tr> 
	</thead> 
	<tbody>
		<?php foreach($result as $editor1):?>
			<tr>
				<td><?=$editor1['id']?></td>
				<td><?=$editor1['writer']?></td>
				<td><?=$editor1['title']?></td>
				<td><?=$editor1['status']==1?'Hiện':'Ẩn'?></td>
				<td><a href="?option=repair&id=<?=$editor1['id']?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>   <a onclick=" return confirm('Bạn muốn xóa !');" href="?option=delete&id=<?=$editor1['id']?>" class="btn btn-danger"><em class="fa fa-trash"></em></a>   <a href="?option=re-up&id=<?=$editor1['id']?>"><?=$editor1['status']==0?'<div class="btn btn-default"><i class="far fa-arrow-square-up"></i></div>':''?></a></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table> 
		</ul>
			<section class="text-center" style="font-size: 18px; padding-bottom: 2%;">
				<?php 
				if ($total>$contentperpage) {
					for ($i=1; $i <= $totalpage ; $i++) { ?>
					<a href="?page=<?=$i?>" class="<?=$page==$i?'highlight':''?>">
						<button style="outline: none;">
							<?=$i?>
						</button>
					</a>
				<?php }
						} ?>
		
	</section>	
		</section>

		<?php } ?>