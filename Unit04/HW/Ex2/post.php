<?php 

if (isset($_POST['name']) && isset($_POST['mobile'])&&isset($_POST['email']) &&isset($_POST['sex']) &&isset($_POST['add']) ) {

	$msv = $_POST['msv'];

	$name = $_POST['name'];

	$mobile = $_POST['mobile'];

	$email = $_POST['email'];

	$GT = $_POST['sex'];

	$add = $_POST['add'];

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">

		<h1 align="center">PHP - POST</h1>
		<div class="form-group">
			<label for="">Mã sinh viên: </label>
			<?php echo  $msv;?>
		</div>

		<div class="form-group">
			<label for="">Họ và tên: </label>
			<?php echo $name;?>
		</div>

		<div class="form-group">
			<label for="">Số điện thoại: </label>
			<?php echo $mobile;?>
		</div>

		<div class="form-group">
			<label for="">Email: </label>
			<?php echo $email;?>
		</div> 

		<div class="form-group">
			<label for="">Giới tính: </label>
			<?php echo $GT;?>
		</div>

		<div class="form-group">
			<label for="">Địa chỉ: </label>
			<?php echo $add;?>
		</div>

		
	</div>
</body>
</html>

<?php
}
?>




