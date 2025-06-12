<?php

for($i=0;$i<10;$i++){

    echo $i."<br>";

    

    if($i == 6){
        break;
    }
}

echo "<br>";

for($j=0;$j<=10;$j++){
    echo $j."<br>";

    if($j >= 4 && $j  <=7){
        break;
    }
}



?>