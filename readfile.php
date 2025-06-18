<?php
$filename = "file/php.txt";

$file = fopen($filename,"r") or die("file is not readable");
echo fread($file,filesize($filename));
fclose($file);




?>