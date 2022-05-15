<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
table.big{
	border: 1px groove maroon;
	font-family: Arial;
	font-size: 10pt;
	border-collapse: separate; 
	border-spacing: 0px; 
	display: block;
	width: 800px;
	margin: 20px 100px;
}
td{
	border: thin dotted maroon;
	padding: 5px;	
	text-align: justify;
}
th{ 
	color: #FFFFFF;	
	font-size: 11pt;
	font-weight:bold;
	text-align:center;
	background-color: #FF0000;
	border: thin solid #FFFFFF;
}
</style>
</head>
<body>

		<p align="right" style="font-size:9pt;font-weight:bold;padding:5px;">
		<a href="trangtin.html">Trang chủ</a> | 
		<a href="dangtin.htm">Đăng tin</a>
		</p>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "trannhonhoa";
			$dbname = "qltin";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if($conn->connect_error){
				die("Không thể kết nối: ".$conn->connect_error);
				exit();
			}

			$chuyenmuc = $_POST['oCM'];
			$noidung = $_POST['tND'];
			$diadiem = $_POST['oDD'];
			$email = $_POST['tEM'];

			$sql = "insert into baidang values('$chuyenmuc','$noidung','$diadiem','$email')";

			if($conn->query($sql)){
				Header("Location: trangtin.html")
			}
		?>
		<p align="right" style="font-size:9pt;font-weight:bold;padding:5px;">
		<a href="trangtin.html">Trang chủ</a> | 
		<a href="dangtin.htm">Đăng tin</a>
		</p>

</body>
<html>