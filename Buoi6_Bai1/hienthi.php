<!DOCTYPE html>	
		<html>
			<head>
				<title>Trang Tin</title>
				<meta charset="utf-8" />
				<style>
					table {border-collapse:collapse;width:400px;margin:auto;border:solid green 1px;}
					th, td {font-size: 16px;text-align: left;padding: 8px; border-bottom:solid green 1px; color: #000080;}
					th{color: blue;background-color:#F0FFF0;}
		
					tr:hover{background-color: #FFFACD;}
					caption{
						font-size: 24px;
						color: blue;
						text-align:left;
						font-weight: bold;
					}
				</style>
				
			</head>
			<body>		
				<?php	
					$servername = 'localhost';
					$username = 'root';
					$password = 'abc123';
					$dbname = 'quanly_tin';

				

					$conn = mysqli_connect($servername, $username, $password, $dbname);

					if(!$conn){
						die("Lỗi". mysqli_connect_error());
					}

					$sql = "select * from linhvuc";
					$danhsach = mysqli_query($conn, $sql);
				?>					
				<table >
					<caption>Danh sách lĩnh vực</caption>
					<tr>
						<th>STT</th>
						<th>Mã Lĩnh Vực</th>
						<th>Tên Lĩnh Vực</th>						
					</tr>
					<?php if(mysqli_num_rows($danhsach) > 0):
						$i = 1;
						while($dong = mysqli_fetch_assoc($danhsach)):?>

							<tr>
								<td colspan="" rowspan="" headers=""><?php echo $i++ ?></td>
								<td colspan="" rowspan="" headers=""><?php echo $dong['MaLinhVuc'] ?></td>
								<td colspan="" rowspan="" headers=""><?php echo $dong['TenLinhVuc'] ?></td>
							</tr>
					<?php endwhile ?>
					<?php endif?>	
					<tr>
						<td colspan="8">
							<a href="formlinhvuc.php">Thêm lĩnh vực</a>
						</td>
					</tr>
				</table>				
			</body>
		</html>
	
	
	
	