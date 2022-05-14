<!DOCTYPE html>
<html>
	<head>
		<title>Thực hành PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
	<?php 
		if(isset($_GET['btnTong'])){
			$a=$_GET['txtSo1'];
			$b=$_GET['txtSo2'];
			if(is_numeric($a)&&is_numeric($b)){
				$max=$a+$b;
				echo "Tong( $a, $b) la $max";
			}else{
				echo "Gia tri vua nhap ko phai la so!";
			}
		}
		
		?>
		
		<form method="get" action="Bai2.php">
			Số thứ 1: <input type="text" name="txtSo1" />
			Số thứ 2: <input type="text" name="txtSo2" />
			<input type="submit" name="btnTong" value="Tổng" />
		</form>
	</body>
</html>