<?php 
    setcookie("myName","Phong" , time()+3600 ) ;//3600=1h
    if(isset($_COOKIE['myName'])){
        echo $_COOKIE['myName']."<br>";
    }

    session_start();
    $_SESSION["myName"] = "Phong";
    $_SESSION["myProject"] = "News Website";
    print_r($_SESSION);
    
    session_destroy();
?>