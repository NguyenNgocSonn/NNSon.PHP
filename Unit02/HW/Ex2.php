<?php 
	$arr = array(1, 4, 2, 6, 9, 100, 4);
	$arr2 = array();
	for($i = (count($arr) - 1); $i >= 0; $i--){
		array_push($arr2, $arr[$i]);
	}
	echo "Mảng khi bị đảo ngược: ";
	foreach($arr2 as $key => $value){
		echo $value . "&nbsp&nbsp&nbsp";
	}
 ?>