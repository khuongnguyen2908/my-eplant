<?php 
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysql_query($tv);
	$tv_2=mysql_fetch_array($tv_1);
	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
	echo "<table>";
		echo "<tr>";
			echo "<td width='250px' align='center' >";
				echo "<img src='$link_anh' width='150px' >";
			echo "</td>";
			echo "<td valign='top' >";
				echo "<a href='#'>";
					echo $tv_2['ten'];
				echo "</a>";
				echo "<br>";
				echo "<br>";
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				echo $gia;
				echo "<br>";
				echo "<br>";
				
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan='2' >";
				echo "<br>";
				echo "<br>";
				echo $tv_2['noi_dung'];
			echo "</td>";
		echo "</tr>";
	echo "</table>";
?>