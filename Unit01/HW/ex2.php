<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$a=3;
	$b=-4;
	if ($a==0) {
		if ($b==0) {
			echo "Phương trình có vô số nghiệm";
		}
		else{
			echo "Phương trình vô nghiệm";
		}
	}
	else{
		echo "Phương trình có nghiệm duy nhất: x = ".-$b/$a;
	}
	?>
</body>
</html>