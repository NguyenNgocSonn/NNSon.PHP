<?php
$n=7;
for ($i = 0; $i <$n ; $i++) { 
	for ($j = 0; $j <$i; $j++) { 
		echo "&nbsp&nbsp&nbsp";}
		for ($k = $n - $j; $k > 0; $k--) { 
			echo "# ";
}
	echo "<br>";
}
echo "<br>";
?>