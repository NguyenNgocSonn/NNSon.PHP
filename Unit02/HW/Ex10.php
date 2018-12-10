<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	h1{
		text-align: center;
	}
	table{
		    padding: 0 25%;

	}
		tr>td{
			padding: 9px;
		}
	</style>
</head>
<body>
	<h1>Bảng cửu chương</h1>
	<table>
	<?php 
	for ($i = 1; $i <=10; $i++) { 
		echo "<tr>";
		for ($j = 2; $j <=9 ; $j++) { 
			$ex10 = $i * $j;
			echo "<td>$j x $i = ".$ex10."</td>";
		}
		echo "<tr>";
	}
?>
</table>
</body>
</html>