<?php

// <!-- used to manage information across different pages  -->


session_start();
if(isset($_SESSION['username'])){

    echo "welcome " . $_SESSION['username'] ."<br>";
echo "your favourite category is " . $_SESSION['favcat'];

echo  "<br>";
}else{
    echo "plaese logged in first"."<br>";
}

 

?>