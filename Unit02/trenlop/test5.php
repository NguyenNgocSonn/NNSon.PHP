<?php 
function kiem_tra_chan_le($number)
{
	// if($number %2 ==0)
	// 	return true;
	// else return false;
	return($number % 2 ==0)?true:false;
}
echo"sochuyenvaolaso ".((kiem_tra_chan_le(12))?"chan":"le");


function kiem_tra_chan_le1($number)
{
	// if($number %2 ==0)
	// 	return true;
	// else return false;
	return($number % 2 ==0)?"chan":"le";
}


echo "<br>so chuyen vao la so ".kiem_tra_chan_le1(12);
?>