<?php
session_start();

if(isset($_REQUEST['button'])){
    if($_REQUEST['button'] =="set"){
        $val = $_REQUEST['username'];
        $_SESSION['username'] = $val;
    }

    if($_REQUEST['button'] =="get"){
        // $vsl = $_REQUEST['username'];
       echo  $_SESSION['username'];
    }

    if($_REQUEST['button'] =="delete"){
        // $vsl = $_REQUEST['username'];
       session_unset();
       session_destroy();
       echo "session is aborted";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_html_form</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="enter username">
        <br>
        <br>
        <button name="button" value="set">set session</button> 
        <br>
        <br>
        <button name="button" value="get">Get session</button> 
        <br>
        <br>
        <button name="button" value="delete">Delete session</button> 
        
    </form>
    
</body>
</html>