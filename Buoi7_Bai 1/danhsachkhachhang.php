<html>
	<head>
	<link rel="stylesheet" type="text/css" href="styles/style11.css" />
	</head>
	<body>
	<?php
		include_once "cauhinh.php";

		$sql = "select * from khachhang";

		$danhsach = $conn->query($sql);

		if(!$danhsach){
			die("Khong the ket noi");
			exit();
		}
	?>
		<table width="700px" class="List" align="center" border="0" cellpadding="3">
			<thead>
				<tr>
					<td colspan="8" class="tieude1">Danh sach khach hang</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Ma Khach Hang</th>
					<th>Ten khach hang</th>
					<th>Nam sinh</th>
					<th>Gioi Tinh</th>
					<th>Diem Mua Hang</th>
					<th>Ghi Chu</th>
					<th colspan="2">Hanh Dong</th>
				</tr>
			
		
	<?php
		while($row = $danhsach->fetch_array(MYSQLI_ASSOC)):
	?>
		<tr>
			<td><?php echo $row['MaKH'] ?></td>
	
		
			<td><?php echo $row['HoVaTen'] ?></td>
		
		
			<td><?php echo $row['NamSinh'] ?></td>
	
		
			<td><?php echo $row['GioiTinh'] == 0 ? 'Nam' : 'Nu'  ?></td>
		
		
			<td><?php echo $row['DiemMuaHang'] ?></td>

			<td><?php echo $row['GhiChu'] ?></td>

			<td>
				<a href="suakhachhang.php?id=<?php echo $row['MaKH'] ?>" title="">
					<img src="./images/edit.png" alt="">
				</a>
			</td>
			<td>
				<a href="xoakhachhang.php?id=<?php echo $row['MaKH'] ?>" title="">
					<img src="./images/delete.png" alt="">
				</a>
			</td>

		</tr>
	<?php endwhile; $conn->close(); ?>
	</tbody>
	<tr>
		<td colspan="8" rowspan="" headers=""><a href="themkhachhang.php" title="">Them Khach hang</a></td>
	</tr>
	</table>
	</body>
</html>
	
