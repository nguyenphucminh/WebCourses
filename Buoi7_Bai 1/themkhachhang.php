﻿<html>
	<head>
	<link rel="stylesheet" type="text/css" href="styles/style11.css" />
	</head>
	<body>
	<form action="themkhachhang_submit.php" method="post">
		<table align="center" border="0" width="450" cellpadding="3">
			<tr>
				<td colspan="2" class="tieude1">Đăng ký khách hàng thân thiết</td>
				
			</tr>
			
			<tr>
				<td>Họ và tên:</td>
				<td><input type="text" name="HoTen" /><span class="requirefield">*</span></td>
			</tr>
			<tr>
				<td>Năm sinh: (YYYY)</td>
				<td><input type="text" name="NamSinh" /><span class="requirefield">*</span></td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td>
					<input type="radio" name="GioiTinh" value="0" checked="checked" />Nam
					<input type="radio" name="GioiTinh" value="1" />Nữ
				</td>
			</tr>
			<tr>
				<td>Điểm mua hàng:</td>
				<td><input type="text" name="DiemMuaHang" /><span class="requirefield">*</span></td>
			</tr>
			<tr>
				<td>Ghi chú:</td>
				<td><textarea name="GhiChu"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">(*): Các trường bắt buộc nhập thông tin.
				<input type="submit" value="Đăng ký" />
				</td>
				
			</tr>
		</table>		
	</form>
	</body>
</html>