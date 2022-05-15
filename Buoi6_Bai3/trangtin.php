<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang tin</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "abc123";
		$dbname = "qltin";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if($conn->connect_error){
			die("Không thể kết nối: ".$conn->connect_error);
			exit();
		}

		$sql = "insert into baidang values('$chuyenmuc','$noidung','$diadiem','$email')";
		$danhsach = $conn->query($sql)
		if(!$danhsach){
			die("Không thể kết nối: ".$conn->connect_error);
			exit();
		}

		while($row = $danhsach->fetch_array(MYSQLI_ASSOC)):
	?>
<?php endwhile ?>
</body>
</html>