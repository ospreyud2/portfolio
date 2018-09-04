<?php
	$file_name = 'log.txt';
	$fh = fopen($file_name,'a') or die('cannot open file: '.$file_name);
	fwrite($fh,$_SERVER['REMOTE_ADDR']."\n");
	fwrite($fh,"");
?>
