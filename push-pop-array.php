<?php

$users = ["anaya","shanaya","manaya","suhana"];

print_r($users);
echo "<br>";



array_push($users,"ananya","aditi","anil");


print_r($users);

echo "<br>";



array_pop($users);

print_r($users);



echo "<br>";



array_splice($users,-3);


print_r($users);
echo "<br>";




array_splice($users,1,2,"suhana,ananya,aditi");

print_r($users);
echo "<br>";






array_splice($users,1,2,["suhana","ananya","aditi"]);

print_r($users);
echo "<br>";

?>