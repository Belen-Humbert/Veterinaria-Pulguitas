<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Historial Médico</title>
    <link rel="stylesheet" href="styleHistorial.css">
</head>
<body>
    <h2>Formulario de Historial Médico</h2>
    <form action="historialConexion.php" method="POST">
    <label for="idMascota">ID de Mascota:</label>
        <input type="text" id="idMascota" name="idMascota" required><br><br>

        <label for="fechaConsulta">Fecha de Consulta:</label>
        <input type="date" id="fechaConsulta" name="fechaConsulta" required><br><br>

        <label for="diagnostico">Diagnóstico:</label><br>
        <textarea id="diagnostico" name="diagnostico" rows="4" cols="50" required></textarea><br><br>

        <label for="tratamiento">Tratamiento:</label><br>
        <textarea id="tratamiento" name="tratamiento" rows="4" cols="50" required></textarea><br><br>

        <label for="notasMedicas">Notas Médicas:</label><br>
        <textarea id="notasMedicas" name="notasMedicas" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Guardar">
    </form>

</body>
</html>


