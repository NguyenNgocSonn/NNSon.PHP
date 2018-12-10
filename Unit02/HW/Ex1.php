<?php 
	$arr = array(1, 4, 2, 6, 9, 100, 4);
	for ($i = 0; $i < count($arr); $i++) { 
		for ($j = 0; $j < count($arr) - 1; $j++) { 
			if ($arr[$j] > $arr[$i]) {
				$ex1 = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $ex1;
			}
			
		}

	}
	echo "Bảng mã sau khi sắp xếp: ";
	foreach ($arr as $key => $value) {
	echo $value."&nbsp&nbsp&nbsp";
	
}
?>