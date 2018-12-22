<?php 
require 'add_process.php';
$data_arr = getListStudent();
$id = $_GET['id'];
foreach ($data_arr as $value) {
	if ($id == $value['student_id']) {
		echo "<br>Mã sinh viên: ".$value['student_id'];
		echo "<br>Họ tên: ".$value['student_name'];
		echo "<br>Giới tính: ".$value['student_gender'];
		echo "<br>Số điện thoại: ".$value['student_mobile'];
		echo "<br>Email: ".$value['student_email'];
		echo "<br>Địa chỉ: ".$value['student_address'];
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><br><br>
	<a href="list.php" >Quay lai</a>
</body>
</html>