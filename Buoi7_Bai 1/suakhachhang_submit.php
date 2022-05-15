	<?php
		include_once 'cauhinh.php';

		$Hoten = $_POST['HoTen'];
		$NamSinh = $_POST['NamSinh'];
		$GioiTinh = $_POST['GioiTinh'];
		$DiemMuaHang = $_POST['DiemMuaHang'];
		$GhiChu = $_POST['GhiChu'];
		$id = $_GET['id'];
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
			$sql = "update khachhang set Hovaten = '$Hoten', NamSinh = '$NamSinh',
			 GioiTinh = $GioiTinh, DiemMuaHang = $DiemMuaHang, GhiChu = '$GhiChu' 
			 where MaKH = $id";
			if($conn->query($sql) === True){
				header("Location: danhsachkhachhang.php");
			}
			else{
				echo "Loi" . $sql;
			}
		}
	?>
