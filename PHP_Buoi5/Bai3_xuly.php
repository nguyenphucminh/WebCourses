<html>
	<head>
	</head>
	<body>
		<?php
			
            $a=$_POST['txtSo'];
			
			if(is_numeric($a)){
				if($a%2==0)
				    echo "$a la so chan";
                 else
                 echo "$a la so le";
			}else{
				echo "Gia tri vua nhap ko phai la so!";
			}
			
		?>
	</body>
</html>