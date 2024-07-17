<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de Historial Médico</title>
</head>
<body>

    <h2>Consultas Historial Médico</h2>
    <form action="consultasTablas.php" method="POST">
        <label for="idMascota">ID de Mascota:</label>
        <input type="text" id="idMascota" name="idMascota" required><br><br>
        <input type="submit" value="Consultar Historial Médico">
    </form>

</body>
</html>
