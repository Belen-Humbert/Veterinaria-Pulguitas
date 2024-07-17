<?php

$servername = "localhost:3310"; 
$username = "root"; 
$password = ""; 
$database = "veterinaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
