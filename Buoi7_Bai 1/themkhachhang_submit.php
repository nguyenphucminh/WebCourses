	<?php
		include_once 'cauhinh.php';

		$Hoten = $_POST['HoTen'];
		$NamSinh = $_POST['NamSinh'];
		$GioiTinh = $_POST['GioiTinh'];
		$DiemMuaHang = $_POST['DiemMuaHang'];
		$GhiChu = $_POST['GhiChu'];

		if(trim($Hoten) == ''){
			echo "Ho ten khong duoc de trong";
		}
		elseif (trim($NamSinh) == '' || !is_numeric($NamSinh)) {
			echo "Khong duoc bo trong va phai la so";
		}
		elseif (trim($DiemMuaHang) == '' || !is_numeric($DiemMuaHang) ) {
			echo "Khong duoc bo trong va phai la so";
		}
		else
		{
			$sql = "insert into khachhang(Hovaten, NamSinh, GioiTinh, DiemMuaHang, GhiChu) 
			values('$Hoten', '$NamSinh', $GioiTinh, $DiemMuaHang, '$GhiChu')";

			if($conn->query($sql) === True){
				header("Location: danhsachkhachhang.php");
			}
			else{
				echo "Loi" . $sql;
			}
		}
	?>
