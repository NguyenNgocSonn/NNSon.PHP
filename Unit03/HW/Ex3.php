<?php 
	$name = " ngUyễN ngỌc sƠN ";
	$name1 = trim($name);
	$name2 = mb_strtolower($name1, 'UTF-8');
	$name3 = ucwords($name2);
	$name4 = $name3 . ".";
	echo "Sau khi được chuẩn hóa là: " . $name4;
?>