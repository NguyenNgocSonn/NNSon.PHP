<?php 
	require_once('email_funtion.php');

	$contents = '<h4> Hello PHP 14 </h4>';


	$subject = 'PHP14 - Test Email';

	send_email('n.n.son.it.cv@gmail.com','Nguyễn Ngọc Sơn',$contents, $subject);

 ?>