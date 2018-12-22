<?php 
session_start();
if(isset($_POST['user'])&&isset($_POST['pwd'])){

	$username =$_POST['user'];
	$password =$_POST['pwd'];

}
if ($username == "admin"&&$password==123456) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	setcookie('msg','Đăng nhập thàng công',time()+60);
	// echo "Dang nhap thanh cong";

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<?php 
		if (isset($_COOKIE['msg'])) {
			?>
			<p>
				<?php 
				echo $_COOKIE['msg'];
				?>
			</p>
			<?php
		} 
		?>
		<a href="logout.php">Dang xuat</a>
	</body>
	</html>
	<?php
}else{
	echo "Ban vua nhap sai email hoac password !";
	
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
		a{
			text-decoration-line: none;
		}
	</style>
</head>
<body>
	<a href="index.html">quay lai</a>
</body>
</html>
<?php
}

?>