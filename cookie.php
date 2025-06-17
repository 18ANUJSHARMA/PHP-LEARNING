<?php


setcookie("flower","sunflower",time()+3600);
setcookie("color","blue",time()+3600);
if(isset($_COOKIE["flower"])){
    echo " flower is set to ". $_COOKIE["flower"];
}
else{
    echo "no flower set";
}
echo "<br>";


if(isset($_COOKIE["color"])){
    echo " color is set to ". $_COOKIE["color"];
}
else{
    echo "no color set";
}
echo "<br>";

print_r($_COOKIE);
?>