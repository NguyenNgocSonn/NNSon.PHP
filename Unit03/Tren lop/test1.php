<?php 
	$name ="Info About Me - Code your life";
	$ex= explode(" ", $name);

	echo "<pre>";
		print_r(explode(" ",$name));
	echo "</pre>";

	echo implode("*",$ex);

	echo "<br>strlen: ".strlen($name);

	echo "<br>str_word_count: ".str_word_count($name);

	echo "<br>str_repeat(chuoi, so lần lặp): ".str_repeat("<br>zent",6);

	echo "<br>str_replace: ".str_replace("o","o_O",$name);

	echo "<br>".md5('abc123');
	echo "<br>".sha1('abc123');

	echo "<br>".substr($name,2,6);
	echo "<br>".strpos($name,"-")

	

?>