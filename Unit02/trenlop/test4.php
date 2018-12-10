<?php
$info = array();
$info['name'] = 'Nguyen Ngoc Son';
$info['add'] = 'BN';
$info['mail'] = 'n.n.son.it.cv@gmail.com';
$info['phone'] = '012387187249';
$info['class'] = 'PHP17';

foreach ($info as $key => $value) {
	echo"<br> Key: ".$key;
	echo"<br> value: ".$value;
	echo"<br>";
}
 echo "<hr><br>";
foreach ($info as $val) {
	echo "<br>".$val;
	echo"<br>";
}

?>