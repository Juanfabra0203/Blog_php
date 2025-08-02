<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "blog_db";


$conexion = new mysqli($host,$user,$pass,$database);

if($conexion ->connect_error){
    die("Error en la conexion " . $conexion ->connect_error);
}

?>