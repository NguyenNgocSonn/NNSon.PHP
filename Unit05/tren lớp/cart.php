<?php 
include_once('number_to_words.php');
session_start();


$Motos = $_SESSION;


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SuperBike Store</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
	<div class="container">
		<a href="index.php" title=""class="btn btn-warning">Quay lại trang sản phẩm</a>
		<table class="table">
			<h2 align="center">DANH SÁCH SẢN PHẨM TRONG GIỎ HÀNG</h2>
			<thead>
				<tr>
					<th>STT</th>
					<th>MÃ SẢN PHẨM</th>
					<th>TÊN SẢN PHẨM</th>
					<th>ĐƠN GIÁ</th>
					<th>SỐ LƯỢNG</th>
					<th>THÀNH TIỀN</th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				$tong=0;
				foreach ($Motos as $moto) {
					$i++;
					$tong += $moto['SoLuong']*$moto['DonGia'];
					?>
					<tr>
						<td><?= $i?></td>
						<td><?= $moto['MaSP'] ?></td>
						<td><?= $moto['TenSP'] ?></td>
						<td><?= number_format($moto['DonGia']) ?></td>
						<td>
							<a href="addcart.php?MaSP=<?= $moto['MaSP'] ?>" class="btn btn-success" title="">+</a>
							<?= $moto['SoLuong'] ?>
							<a href="delete.php?MaSP=<?= $moto['MaSP'] ?>" class="btn btn-danger" title="">-</a>
						</td>
						<td ><?= number_format($moto['SoLuong']*$moto['DonGia']) ?></td>

					</tr>
				<?php } ?>

				<tr>
					<td colspan="5" align="right"><b>Tổng tiền:</b></td>
					<td align="right"><b><?= number_format($tong) ?> VND</b></td>
				</tr>

				<tr>
					<td colspan="5" align="right"><b>Bằng chữ:</b></td>
					<td align="right"><b><?= convert_number_to_words($tong) ?> đồng </b></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>


