<html>
	<head>
	</head>
	<body>
	<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'quanly_tin';

		$malv = $_POST['txtMaLinhVuc'];
		$tenlv = $_POST['txtTenLinhVuc'];

		echo $malv, $tenlv;

		if(trim($malv) == "" || trim($tenlv) == ""){
			echo "Phải nhập thông tin lĩnh vực";
		}
		else{
			if(isset($malv) && isset($tenlv)){
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				if (!$conn){
					die("lỗi".mysqli_connect_error());
				}
				$sql = "insert into linhvuc(MaLinhVuc, TenLinhVuc) values('$malv', '$tenlv')";

				if (mysqli_query($conn, $sql)){
					Header("Location: hienthi.php");
				}
				else{
					echo "Error" . $sql;
				}
				mysqli_close($conn);
			}
		}
	?>
	<p><a href="formlinhvuc.php">Nhập mới</a></p>
	</body>
</html>
