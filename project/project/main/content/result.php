<section class="content">
		<h1 class="banner">KẾT QUẢ TÌM KIẾM</h1>
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
			$query = "select*from post where status = 1 limit $offset, $contentperpage";
			$result=$connect->query($query);
			foreach ($result as $item) {?>
				<li class="choice"><a href="?option=menulist&id=<?=$item['id']?>"><?=$item['title']?></a></li>
			<?php }?>
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