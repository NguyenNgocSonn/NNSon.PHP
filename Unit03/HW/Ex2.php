<?php
function kiem_tra_chuoi_palindrome($name) 
{ 
	if ($name == strrev($name))  
		echo $name . " là chuỗi palindrome"  ;

	else  
		echo $name ." không là chuỗi palindrome" ;  
}  
echo kiem_tra_chuoi_palindrome("That's Culua") . "<br>";
echo kiem_tra_chuoi_palindrome("MargicigraM") . "<br>";
?>