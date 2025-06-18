<?php

// <!-- used to manage information across different pages  -->


session_start();
session_unset();
session_destroy();

echo  "you have been logged out "."<br>";
 

?>