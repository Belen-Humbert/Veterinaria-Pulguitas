<?php
// Conexión a la base de datos
$servername = "localhost:3310";
$username = "root";
$password = "";
$database = "veterinaria";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar datos del formulario de mascotas
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombreMascota"])) {
    $nombreMascota = $_POST["nombreMascota"];
    $edadMascota = $_POST["edadMascota"];
    $pesoMascota = $_POST["pesoMascota"];
    $descripcionMascota = $_POST["descripcionMascota"];
    $idCliente = $_POST["idCliente"];

    // Insertar datos en la tabla mascota
    $sql = "INSERT INTO mascota (nombreMascota, edadMascota, pesoMascota, descripcionMascota, idCliente)
            VALUES ('$nombreMascota', $edadMascota, $pesoMascota, '$descripcionMascota', $idCliente)";

    if ($conn->query($sql) === TRUE) {
        echo "Mascota ingresada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Procesar datos del formulario de clientes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombreCliente"])) {
    $nombreCliente = $_POST["nombreCliente"];
    $dniCliente = $_POST["dniCliente"];
    $emailCliente = $_POST["emailCliente"];
    $telefonoCliente = $_POST["telefonoCliente"];

    // Insertar datos en la tabla cliente
    $sql = "INSERT INTO cliente (nombreCliente, dniCliente, emailCliente, telefonoCliente)
            VALUES ('$nombreCliente', '$dniCliente', '$emailCliente', '$telefonoCliente')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente ingresado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Historial Médico</title>
    <link rel="stylesheet" href="styleHistorial.css">
</head>
<body>
</body>
</html>
