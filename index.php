<?php
	//session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	

?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Công ty TNHH EPlant</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
 
	</head>
	<body>
		<center>
			<table width="990px">
				<tr>
					<td colspan="3"><?php include("chuc_nang/banner/banner.php"); ?></td>
				</tr>
				<tr>
					<td colspan="3" height="50px" >
						<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
						?> 
					</td>
				</tr>
				<tr>
					<td width="170px" valign="top" >
					<?php 
						include("chuc_nang/menu_doc/menu_doc.php");
						include("chuc_nang/san_pham/moi.php"); 
						
					?>					
					</td>
					<td width="650px" valign="top" >
						<?php 
							include("chuc_nang/dieu_huong.php");
						?>
					</td>
					<td width="170px" valign="top" >
					<?php 
						include("chuc_nang/tim_kiem/vung_tim_kiem.php");
						
						include("chuc_nang/san_pham/noi_bat.php"); 
						
					?>					
					</td>
				</tr>
				<tr>
					<td colspan="3"><?php include("chuc_nang/footer/footer.php"); ?></td>
				</tr>
			</table>
		</center>
	</body>
</html>