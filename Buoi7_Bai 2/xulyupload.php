<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<title></title>		
	</head>
	<body>
		<?php
			if($_FILES['taptin1']['error'] > 0){
				echo "Loi";
			}
			else{
				echo "Ten file" . $_FILES['taptin1']['name'] ."<br>";
				echo "Kieu ". $_FILES['taptin1']['type'] . "<br>";
				echo "Dung luong: " . ($_FILES['taptin1']['size'] /1024) . "Kb<br>";
				echo "File tam: " . $_FILES['taptin1']['tmp_name'] . "<hr>";
				if(file_exists("upload/".$_FILES['taptin1']['name'])){
					echo $_FILES['taptin1']['name'] . "Da ton tai";
				}
				else{
					move_uploaded_file($_FILES['taptin1']['tmp_name'], 'upload/' . $_FILES['taptin1']['name']);
					echo "Da upload";
				}
			}
		?>	
	</body>
</html>