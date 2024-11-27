<?php

$username = "root";
$password = "123";
$database = "meuBanco";
$servername = "mysql-connection";

$link = new mysqli($servername, $username, $password, $database);

if(mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
}
?>