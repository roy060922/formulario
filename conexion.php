<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'bd_pru';


$conexion = mysqli_connect($host, $username, $password, $database);
if (!$conexion){
    echo ("error" . mysqli_connect_error());
}