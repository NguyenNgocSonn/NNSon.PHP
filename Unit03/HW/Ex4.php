<?php 
	$name = "Nguyễn Ngọc Sơn";
	echo "Họ tên: " . $name. "<br><br>";
	$data = explode(" ",$name);
	$arr = count($data);
	$ho = $data[0];
	$ten = $data[$arr-1];
	echo "Họ: " . $ho . "<br>";
	echo "Tên đệm: ";
	for ($i = 1; $i <= $arr - 2; $i++) { 
		$ten_dem = $data[$i] . " ";
		echo "$ten_dem";
	}echo "<br>";
	echo "Tên: " . $ten . "<br>";
 ?>