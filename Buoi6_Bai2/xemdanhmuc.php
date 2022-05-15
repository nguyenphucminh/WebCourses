<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="dinhdang/mystyle.css">
</head>

<body>
	<table class="bieumau1" border="1">
		<tr> 
		  <td colspan="5" class="canhgiua"><h2>Danh mục sản phẩm</h2></td>
		</tr>
		<tr> 
		  <td>STT</td>
		  <td>Tên Sản Phẩm</td>
		   <td>Hình ảnh</td>
		   <td>Giá bán</td>
		   <td>Giá gốc</td>
		</tr>
		
			<?php
	
				$servername = "localhost";
				$username = "root";
				$password = "abc123";
				$dbname = "qlhanghoa";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if($conn->connect_error){
					die("Không thể kết nối: ".$conn->connect_error);
					exit();
				}
				$sql = "select * from mathang";

				$danhsach = $conn->query($sql);

				if(!$danhsach){
					die("không thể thực hiện sql");
					exit();
				}
				$i = 1;

				while($row = $danhsach->fetch_array(MYSQLI_ASSOC)):
			?>	<tr>	
				<td colspan="" rowspan="" headers="">
					<?php echo $i++?>
				</td>
				<td colspan="" rowspan="" headers="">
					<?php echo $row['TenHang'] ?>
				</td>
				<td colspan="" rowspan="" headers="">
					<img src="<?php echo $row['HinhAnh'] ?>" alt="">
				</td>
				<td colspan="" rowspan="" headers="">
					<?php echo $row['GiaGoc'] ?>
				</td>
				<td colspan="" rowspan="" headers="">
					<?php echo $row['GiaBan'] ?>
				</td>
				</tr>
			<?php endwhile;
				$conn->close();
	 		?>
		
	</table>
</body>
</html>