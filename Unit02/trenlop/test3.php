<!-- mang k tuan tu -->
<?php
$info = array();
$info['name'] = 'Nguyen Ngoc Son';
$info['add'] = 'BN';
$info['mail'] = 'n.n.son.it.cv@gmail.com';
$info['phone'] = '012387187249';
$info['class'] = 'PHP17';

echo"thong tin";
echo"<hr>";
echo"<br>ho ten: ".$info['name'];
echo"<br>dia chi: ".$info['add'];
echo"<br>mail: ".$info['mail'];
echo"<br>phone: ".$info['phone'];
echo"<br>lop: ".$info['class'];
$point = array();
$point['toan']=array(10,9);
$point['ly']=8;
$info['point']=$point;

echo "<pre>";
print_r($info);
echo"</pre>";
echo"<br> diem toan ".$info['point']['toan'][0];
echo"<br> diem ly ".$info['point']['ly'];
 // vidu mang 2 chieu
$row1 = array(1,2,3,4);
$row2 = array(5,6,7,8);
$data = array($row1,$row2);

echo "<pre>";
print_r($data);
echo"</pre>";

for($i=0;$i<count($data);$i++){
	for($j=0;$j<count($data[$i]);$j++){
		echo $data[$i][$j]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	echo "<br>";
 }
?>