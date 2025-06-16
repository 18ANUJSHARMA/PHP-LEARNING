<?php
echo "this is the signup form page";
echo "<br>";
print_r($_POST);
echo "<br>";
if($_POST){
    echo "user name is".$_POST["username"]."<br>";
    echo "user password is".$_POST["password"]."<br>";
    echo "user email is".$_POST["email"]."<br>";
}

?>