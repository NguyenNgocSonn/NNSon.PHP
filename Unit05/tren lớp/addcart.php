<?php 
include_once('data.php');
	session_start();

		// Bước 1: Lấy Ma SP người dùng đang chọn
		$maSP = $_GET['MaSP'];

	if(isset($_SESSION[$maSP])){
		$_SESSION[$maSP]['SoLuong']++;
		
	}else{
		// Bước 2: Lấy thông tin toàn bộ sản phẩm theo mã
		$moto = $Motos[$maSP];
		

		// Bước 3: Gán số lượng về 1
		$moto['SoLuong'] = 1;

		$_SESSION[$maSP] = $moto;

	}

	

	header('Location: cart.php');
	

 ?>
