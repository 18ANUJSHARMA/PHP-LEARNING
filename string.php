<?php


$str1 = "hello";
$str2 = "hello";

$str2 .= $str1;

echo $str2;
echo "<br>";

$str3 = "world";
echo "<br>";
echo "this is $str2 and $str3";
echo "<br>";
echo 'this is $str2 and $str3';
echo "<br>";

echo "this is ".$str2."and".$str3;
echo "<br>";

?>