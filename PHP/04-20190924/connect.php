<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=aptech_php_19', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected thanh con";
}catch (Exception $e) {
    echo $e->getMessage();
    die;
}
?>