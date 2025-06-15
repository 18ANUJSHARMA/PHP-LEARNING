<?php



$str = "i love flower .";
echo strlen($str). "<br>";// length of string incluing spaces
echo str_word_count($str). "<br>";// count total number of words 

var_dump($str); // print the type of data with it's length 

// date functions in php 
echo "<br>";

echo date("d")."<br>"; // date of the month 

echo date("m")."<br>"; // month number of the year

echo date("M")."<br>"; // month name of the year

echo date("Y")."<br>";// year in 4 digit format
echo date("y")."<br>"; // year in 2 digit format
echo date("l")."<br>";// day of the week
echo date("D")."<br>";// day of the week in short form

echo date("Y-m-d")."<br>";// date in year-month-day format

echo date("Y-m-d H:i:s")."<br>";// date in year-month-day hour-minute-second format

echo phpinfo()."<br>";// print all the information about php



$var = "hello world";

echo is_string($var)."<br>";// check if the variable is a string or not , if it's string give 1 other wise give nothing

$num = 123;
echo is_int($num)."<br>"; //check whether the variable is an integer or not , is it's integer it give  1 otherwise nothing




echo "hello"."<br>";

// die; // or die() // this will stop the execution of the script // Script stops here. Nothing after this runs.

// exit; // ❌ This never runs // this will stop the execution of the script // Script stops here. Nothing after this runs.
echo " world"."<br>"; // ❌ This never runs
echo "hello world"."<br>";// ❌ This never runs



function name($name){
    echo "my name is $name"."<br>";
}

name("anaya")."<br>";
name("shanaya")."<br>";
name("manaya")."<br>";
name("suhana")."<br>";
name("ananya")."<br>";



?>