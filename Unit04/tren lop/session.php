<?php 
session_start();
$_SESSION['username'] = "That's Cu lua";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

?>