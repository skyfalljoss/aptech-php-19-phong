<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=aptech_php_19;charset=utf8', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e) {
    echo $e->getMessage();
    die;
}
?>