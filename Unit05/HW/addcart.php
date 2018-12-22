<?php 
include_once('data.php');
	session_start();

		$maSP = $_GET['MaSP'];

	if(isset($_SESSION[$maSP])){
		$_SESSION[$maSP]['SoLuong']++;
		
	}else{
		$moto = $Motos[$maSP];
		
		$moto['SoLuong'] = 1;

		$_SESSION[$maSP] = $moto;

	}

	

	header('Location: cart.php');
	

 ?>
