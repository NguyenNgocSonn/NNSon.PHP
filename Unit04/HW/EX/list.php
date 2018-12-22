<?php 
session_start();
if(isset($_SESSION['info'])){
	$data_arr = $_SESSION['info'];
}else{
	$data_arr = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh Sách Sinh Viên</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 align="center">Danh sach sinh vien</h1>
		<a href="add.php"type="button" class="btn btn-primary">Thêm mới</a>
		<?php 
		if(isset($_COOKIE['msg'])){
			?>
			<div class="alert alert-success">
				<strong>Thông báo: </strong> <?php echo $_COOKIE['msg'];?>
			</div>
		<?php } ?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Mã Sinh Viên</th>
					<th>Họ Tên</th>
					<th>Email</th>
					<th>Giới Tính</th>
					<th>Địa Chỉ</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				foreach ($data_arr as $value) { 
					$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['code']; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td>
							<a href="detail.php?code=<?php echo $value['code']; ?>"><button class="btn btn-success">Xem chi tiet</button></a>
							<a href="delete.php?code=<?php echo $value['code']; ?>"><button class="btn btn-success">Xoa</button></a>
						</td>
						<a href="add.php?id=<?php echo $item['student_id']; ?>"><button class="btn btn-success">Cập nhật</button></a>
					</tr>	
				<?php } ?>	
			</tbody>
		</table>
	</div>
</body>
</html>