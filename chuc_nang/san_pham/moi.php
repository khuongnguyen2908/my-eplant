<br><br>
Sản phẩm mới <br><br>
<center>
	<?php 
		$tv="select id,ten,hinh_anh from san_pham order by id desc limit 0,3";
		$tv_1=mysql_query($tv);
		echo "<div class='moi' >";
		while($tv_2=mysql_fetch_array($tv_1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
			echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='100px' >";
			echo "</a>";
			echo "<br><br>";
			echo $tv_2['ten'];
			echo "<br>";
			echo "<br>";
		}echo "</div>";
	?>
</center>
