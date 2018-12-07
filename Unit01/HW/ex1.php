<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	echo " <h1> Giải Phương Trình Bậc 2 </h1>";
	$a = 2;
	$b = 4;
	$c = 1;
	$delta = ($b*$b - 4*$a*$c);
//a!=0
	if ($a != 0) {
		if ($delta > 0){
			echo " Phương trình có 2 nghiệm phân biệt: "."x1 =".(((-$b)+sqrt($delta))/2*$a)." và "."x2 = " . (((-$b)-sqrt($delta))/2*$a) ;
		}
		else if ($delta == 0) {
			echo " Phương trình có 1 nghiệm duy nhất: "." x1 = x2 = ".((-$b)/2*$a) ;
		}else {
			echo " Phương trình vô nghiệm!! ";
		}
	}
//a==0
	else {
		if ($b==0) {
			if ($c==0) {
				echo "Phương trình có vô số nghiệm";
			}
			else{
				echo "Phương trình có vô nghiệm";
			}
		}
		else{
			echo "Phương trình có nghiệm duy nhất: x = ".(-$c/$b);
		}
	}
	?>
</body>
</html>
