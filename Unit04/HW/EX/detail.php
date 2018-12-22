<?php 
require 'add_process.php';
$data_arr = getAllStudents();
$id = $_GET['id'];
	// echo "$id";
foreach ($students as $value) {
	if ($id == $value['student_id']) {
		echo "<br>Mã sinh viên: ".$value['student_id'];
		echo "<br>Họ tên: ".$value['student_name'];
		echo "<br>Email: ".$value['student_email'];
		echo "<br>Giới tính: ".$value['student_gender'];
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
<body><br>
	<a href="list.php"> quay lai</a>
</body>
</html>