<?php

if(isset($_REQUEST['filename'])){
    $fileName = "file/".$_REQUEST['filename']; 
    $content =$_REQUEST['content'];

    $file = fopen($fileName,"w") or die("unable to create file");
    fwrite($file,$content);
    fclose($file);

echo "file created successfully";

}



?>


<form action="" method="post">
    <input type="text" name="filename" placeholder="enter file name">
    <br>
    <br>
    <textarea name="content" placeholder="enter the content of file"></textarea>
    <br>
    <br>
    <button>create file</button>
</form>