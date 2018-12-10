<?php 
$n = 9;
$gt = 1;
$s = 0;
echo "Với n = ".$n." thì ";
for($i = 1; $i <= $n; $i++){
	$gt *= $i;
	$s += ($i/$gt);
}
echo "S = " . $s;
?>