<?php
$servername = "localhost";
$database = "siafum";
$username = "root";
$password = "No";
// Crear conexion
$conexion = mysqli_connect($servername, $username, $password, $database);
// comprobar conexion
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conexion);
?>