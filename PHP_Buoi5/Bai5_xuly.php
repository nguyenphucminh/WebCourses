<html>
	<head>
	</head>
	<body>
		<?php
			
            $a=$_POST['txtSo1'];
			
			if(is_numeric($a)){
                echo "Day so nguyen to be hon $a la: ";
                for($i=2;$i<$a;$i++){
                    if(KT($i))
                        echo "$i ";
                }
				
                // if(KT($a))
                //     echo "$a  phai la so nguyen to";
                // else
                // echo "$a  so nguyen to";
			}else{
				echo "Gia tri vua nhap ko phai la so!";
			}
            function KT($n){
                if($n<=0)
                    return false;
                else{
                    for($i=2;$i<$n/2;$i++){
                        if($n%$i==0)
                        return false;
                    }
                    return true;
                }
            }
			
		?>
	</body>
</html>