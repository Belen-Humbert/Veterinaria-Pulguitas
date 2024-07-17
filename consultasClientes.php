<!DOCTYPE html>
<html>
<head>
    <title>Consultas de Veterinaria</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Consultas de Veterinaria</h2>

<?php
include 'consultaClienteConexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si se envió el formulario con el idMascota y no está vacío
    if(isset($_POST['idMascota']) && !empty($_POST['idMascota'])) {
        $idMascota = $_POST['idMascota'];
        // Consulta SQL para obtener las consultas de la mascota seleccionada
        $sql = "SELECT * FROM consultas WHERE idMascota = $idMascota";
        $result = $conn->query($sql);

        // Verificar si la consulta se ejecutó correctamente
        if ($result === false) {
            // Si hay un error en la consulta, mostrar el mensaje de error
            die("Error en la consulta: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID Consulta</th><th>ID Mascota</th><th>Nombre del Dueño</th><th>Motivo de la Consulta</th><th>Email del Dueño</th><th>Teléfono del Dueño</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["idConsulta"]."</td><td>".$row["idMascota"]."</td><td>".$row["nombreDueño"]."</td><td>".$row["motivoConsulta"]."</td><td>".$row["emailDueño"]."</td><td>".$row["telefonoDueño"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No hay consultas para esta mascota.";
        }
    } else {
        echo "Por favor, ingrese un ID de mascota válido.";
    }
}

// Consulta SQL para obtener todas las consultas
$sql = "SELECT * FROM consultas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Consultas completas</h3>";
    echo "<table><tr><th>ID Consulta</th><th>ID Mascota</th><th>Nombre del Dueño</th><th>Motivo de la Consulta</th><th>Email del Dueño</th><th>Teléfono del Dueño</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["idConsulta"]."</td><td>".$row["idMascota"]."</td><td>".$row["nombreDueño"]."</td><td>".$row["motivoConsulta"]."</td><td>".$row["emailDueño"]."</td><td>".$row["telefonoDueño"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay consultas registradas.";
}

$conn->close();
?>

<h2>Buscar Consultas por ID de Mascota</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="idMascota">ID de Mascota:</label>
    <input type="text" id="idMascota" name="idMascota">
    <input type="submit" value="Buscar">
</form>

</body>
</html>
