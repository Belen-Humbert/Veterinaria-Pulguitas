<?php
session_start();
include('conexion.php');

if(isset($_POST['fechaConsulta']) && isset($_POST['diagnostico']) && isset($_POST['tratamiento']) && isset($_POST['notasMedicas']) && isset($_POST['idMascota'])){
    // Obtener los datos del formulario
    $fechaConsulta = $_POST['fechaConsulta'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    $notasMedicas = $_POST['notasMedicas'];
    $idMascota = $_POST['idMascota'];

    // Preparar la consulta SQL para insertar el historial médico
    $sql = "INSERT INTO historialmedico (fechaConsulta, diagnostico, tratamiento, notasMedicas, idMascota) VALUES ('$fechaConsulta', '$diagnostico', '$tratamiento', '$notasMedicas', '$idMascota')";

    // Ejecutar la consulta
    if(mysqli_query($conexion, $sql)){
        echo "Datos del historial médico guardados correctamente.";
    } else{
        echo "Error al guardar los datos del historial médico: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
} else {
    header("Location: historialMedico.php");
    exit();
}
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

