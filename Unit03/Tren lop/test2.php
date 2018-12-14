<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	echo time();
	$int_time=1544529073;
	echo "<br>".date('d/m/Y H:i:s',time()); //H 24h(h 12h), i: phut, s:giay; nếu ko truyền time(), mặc định đã có.
	echo "<br>".date('d/m/Y H:i:s',1544529193);

?>