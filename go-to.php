<?php

$age = 20;


if($age < 18){
    goto underage;;
}

echo "you are eligible, you can drive";
exit;


underage:

echo "you are not eligible , you can't drive";
?>
