<?php 
include_once('data.php');
 ?>

<!DOCTYPE html><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MotoBikes Store</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="container">
    	<a href="cart.php" title="" class="btn btn-warning"style="margin-top: 10px">Xem đơn hàng</a>
        <table class="table">
        	<h1 align="center">DANH SÁCH SẢN PHẨM</h1>
        	<thead>
        		<tr>
        			<th>STT</th>
        			<th>MÃ SẢN PHẨM</th>
        			<th>TÊN SẢN PHẨM</th>
        			<th>ĐƠN GIÁ (VND)</th>
        			<th>SỐ LƯỢNG</th>
        			<th> </th>
        		</tr>
        	</thead>
        	<tbody>
        	<?php 
        		$i=0;
        		foreach ($Motos as $moto) {
        			$i++;
        	?>
	        		<tr>
	        			<td><?= $i?></td>
	        			<td><?= $moto['MaSP'] ?></td>
	        			<td><?= $moto['TenSP'] ?></td>
	        			<td><?= number_format($moto['DonGia']) ?></td>
	        			<td ><?= $moto['SoLuong'] ?></td>
	        			<td> <a href="addcart.php?MaSP=<?= $moto['MaSP'] ?>" class="btn btn-success" title="">Thêm vào đơn hàng</a> </td>
	        		</tr>
        	<?php } ?>
        	</tbody>
        </table>
    </div>
</body>
</html>
