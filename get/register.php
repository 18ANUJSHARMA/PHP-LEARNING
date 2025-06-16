<?php


// print_r($_REQUEST);
// echo "<br>";


// print_r($_REQUEST["username"]);
// echo "<br>";

// print_r($_REQUEST["password"]);
// echo "<br>";


$_REQUEST['dummy'] = "test";

if($_REQUEST){
    foreach($_REQUEST as $key =>$data){
        echo "user $key is $data <br>";
    }
}




?>