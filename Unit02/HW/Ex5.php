<?php 
$n=7;
	for ($i = $n; $i >= 1; $i--) {
		for ($j = 1; $j <= $n ; $j++) {
			if ($j >= $i) {
				echo "#&nbsp";
			}else {
				echo "&nbsp&nbsp&nbsp";
			}
		}
		echo "<br>";
	}
 ?>