<?php

// conexion a la base de datos
$servername="localhost";
$username="root";
$password="";
$dbdname="proyecto";

// verificar conexion
$conn= new mysqli($servername, $username, $password, $dbdname);
if($conn->connect_error){
    die("conexion fallida: ". $conn->connect_error);
}
