<?php 
if(isset($_GET['user'])){
	$user = $_GET['user'];
}

if(isset($_GET['pwd'])){
	$pwd = $_GET['pwd'];
}				

echo "User: ". $user;
echo "<br>Password: ".$pwd;

?>
