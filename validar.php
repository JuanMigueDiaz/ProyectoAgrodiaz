<?php
require 'conexion.php';

// Obtener datos del formulario
$Nombre = $_POST["nombre"];
$Apellido = $_POST["apellido"];
$Correo = $_POST["correo"];


// Insertar datos en la base de datos
$sql = "INSERT INTO agrodiaz (Nombre, Apellido, Correo) VALUES ('$Nombre', '$Apellido', '$Correo')";

$resultado = mysqli_query($conn,$sql);
if ($resultado === TRUE){
	header("location:mostrar.php");
}else{
	echo"Datos no insertados";
}

$conn->close();
?>