<?php 
    if(isset($_GET['login'])&& $_GET['user']=="nam" && $_GET['pass']=="123"){
        echo "Dang nhap thanh cong";
        header("Location: trangchu.php" );
    }
    else {
        
        header("Location: index.php " );
        echo "Dang nhap that bai";
    }
?>