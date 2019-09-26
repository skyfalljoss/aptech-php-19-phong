<?php 
    include 'connect.php';
    $sql_create='CREATE TABLE Bang (
        id int auto_increment,
        email varchar(255),
        password varchar(255),
        primary key (id)
    )';
    $conn->exec($sql_create);
?>
