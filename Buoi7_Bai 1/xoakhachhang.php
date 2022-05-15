	<?php
		include_once 'cauhinh.php';

		
		$id = $_GET['id'];
		
			$sql = " delete from khachhang where MaKH = $id";
			if($conn->query($sql) === True){
				header("Location: danhsachkhachhang.php");
			}
			else{
				echo "Loi " . $sql;
			}		
?>
