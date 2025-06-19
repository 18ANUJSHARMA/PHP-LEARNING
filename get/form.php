<?php
print_r($_POST);

if(isset($_POST['username'])){
    echo "username is " . $_POST['username'];
}
?>