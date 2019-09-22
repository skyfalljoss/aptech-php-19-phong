<?php
    $file_O = fopen("text.txt", "r") or die("Can't open file.");
    // Doc file
    //tung dong
    // while (!feof($file_O)) {
    // echo fgets($file_O) . "<br>";
    // $str.=fgets($file_O);
    // };
    
    // doc het
    $data = fread($file_O, filesize('text.txt'));
    echo $data;
    fclose($file_O); 
    
    //Ghi file
    $file_W = fopen("phong.txt", "a+") or die("Can't open the file.");
    fwrite($file_W, "\nHello world1234");
    fclose($file_W);
    echo readfile("phong.txt");

?>