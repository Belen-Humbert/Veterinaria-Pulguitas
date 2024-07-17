<?php
$servername = "localhost:3310";
$username = "root"; 
$password = ""; 
$database = "veterinaria";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$idMascota = $_POST['idMascota'];
$nombreDueño = $_POST['nombreDueño'];
$motivoConsulta = $_POST['motivoConsulta'];
$emailDueño = $_POST['emailDueño'];
$telefonoDueño = $_POST['telefonoDueño'];

// Preparar la consulta SQL para insertar los datos en la tabla consultas
$sql = "INSERT INTO consultas (idMascota, nombreDueño, motivoConsulta, emailDueño, telefonoDueño) VALUES (?, ?, ?, ?, ?)";

// Preparar la sentencia
$stmt = mysqli_prepare($conexion, $sql);

// Vincular los parámetros
mysqli_stmt_bind_param($stmt, "issss", $idMascota, $nombreDueño, $motivoConsulta, $emailDueño, $telefonoDueño);

// Ejecutar la consulta
if (mysqli_stmt_execute($stmt)) {
    // La consulta se ejecutó con éxito
    echo "La consulta se ha guardado correctamente.";
} else {
    // Si hubo algún error
    echo "Error al guardar la consulta: " . mysqli_error($conexion);
}

// Cerrar la sentencia y la conexión
mysqli_stmt_close($stmt);
mysqli_close($conexion);
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
