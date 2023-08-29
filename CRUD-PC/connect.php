<?php

$host = "localhost";
$user = "root"; //    always root ?
$password = "";
$database = "crud_project";

$connect = mysqli_connect($host, $user, $password, $database); // I think it is the same as making :   $connect = new mysqli('localhost','root','userName','pwd')

if (!$connect) {
    die("Failed to connect with data base!");
}

echo "Database connected!";
mysqli_close($connect);
