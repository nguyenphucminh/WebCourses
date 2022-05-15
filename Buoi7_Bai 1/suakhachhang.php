<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/style11.css" />
</head>
<body>
<?php
	include_once "cauhinh.php";
	// Lấy KH cần sửa và hiển thị vào form
	// Lấy mã KH từ thanh địa chỉ
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM `khachhang` WHERE MaKH = $id";
	$danhsach = mysqli_query($conn, $sql);	
	
	// Vì $danhsach chỉ trả về 1 dòng nên không cần vòng lặp while
	if (mysqli_num_rows($danhsach) > 0) {
		$dong = mysqli_fetch_assoc($danhsach);		
?>

	<form action="suakhachhang_submit.php?id=<?php echo $dong['MaKH'] ?>" method="post">
		<table class="Form" border="0" width="450" cellpadding="3">
			<tr>
				<td colspan="2" class="tieude1">Đăng ký khách hàng thân thiết</td>
				
			</tr>
			
			<input type="hidden" name="MaKH" value="<?php echo $dong['MaKH']; ?>" />
			
			<tr>
				<td>Họ và tên:</td>
				<td><input type="text" name="HoTen" value="<?php echo $dong['HoVaTen']; ?>" /><span class="requirefield">*</span></td>
			</tr>
			<tr>
				<td>Năm sinh: (YYYY)</td>
				<td><input type="text" name="NamSinh" value="<?php echo $dong['NamSinh']; ?>" /><span class="requirefield">*</span></td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td>
					<?php
						if($dong['GioiTinh'] == 0) // Nam
						{
							echo '<input type="radio" name="GioiTinh" value="0" checked="checked" />Nam';
							echo '<input type="radio" name="GioiTinh" value="1" />Nữ';
						}
						else // Nữ
						{
							echo '<input type="radio" name="GioiTinh" value="0" />Nam';
							echo '<input type="radio" name="GioiTinh" value="1" checked="checked" />Nữ';
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Điểm mua hàng:</td>
				<td><input type="text" name="DiemMuaHang" value="<?php echo $dong['DiemMuaHang']; ?>" /><span class="requirefield">*</span></td>
			</tr>
			<tr>
				<td>Ghi chú:</td>
				<td><textarea name="GhiChu"><?php echo $dong['GhiChu']; ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">(*): Các trường bắt buộc nhập thông tin.
				<input type="submit" value="Đăng ký" />
				</td>
				
			</tr>
		</table>
		
		</form>
	<?php
		}
	?>
	
</body>

</html>
