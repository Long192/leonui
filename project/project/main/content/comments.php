<section class="text-center">
	<section style="margin-top: 10%;">
		<?php
			$query1 = "select*from comments where status = 1 and post_id = ".$_GET['id']." order by id desc";
			$result1 = $connect->query($query1);
			if (mysqli_num_rows($result1)==0) {
				$alert = "bài viết không có bình luận nào";
			}else{
				foreach ($result1 as $item) {
		?>
		<section style="margin: 5% 0%;">
			<div style="float: left; margin-left: 9%; font-size: 24px;">
				<?= $item['user'] ?>:
			</div>
			<textarea type="text" name=""disabled rows="5" class="comment" style="border-radius: 10px; background-color: #f7f7f7; border:none;"><?= $item['content']; ?></textarea>
		</section>
		<?php
			}
		}
		?>
		<section style="padding-bottom:5%;"><?=isset($alert)?$alert:'';?></section>
	</section>
</section>