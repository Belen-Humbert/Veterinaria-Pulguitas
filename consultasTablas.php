<?php
session_start();
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID de mascota ingresado por el usuario
    $idMascota = $_POST['idMascota'];

    // Consultar el historial médico de la mascota específica
    $sql = "SELECT * FROM historialmedico WHERE idMascota = $idMascota";
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si se encontraron registros
    if (mysqli_num_rows($resultado) > 0) {
        echo "<h2>Historial Médico de la Mascota con ID $idMascota</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Fecha de Consulta</th><th>Diagnóstico</th><th>Tratamiento</th><th>Notas Médicas</th></tr>";

        // Iterar sobre los resultados y mostrarlos en la tabla
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['fechaConsulta'] . "</td>";
            echo "<td>" . $fila['diagnostico'] . "</td>";
            echo "<td>" . $fila['tratamiento'] . "</td>";
            echo "<td>" . $fila['notasMedicas'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron registros de historial médico para la mascota con ID $idMascota.";
    }

    // Liberar el resultado
    mysqli_free_result($resultado);
}

// Cerrar la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consulta de Historial Médico</title>
</head>
<body>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="idMascota">ID de Mascota:</label>
        <input type="text" id="idMascota" name="idMascota">
        <button type="submit">Consultar Historial Médico</button>
    </form>
</body>
</html>
