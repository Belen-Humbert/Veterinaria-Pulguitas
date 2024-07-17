<?php
$servername = "localhost:3310"; 
$username = "root"; 
$password = ""; 
$database = "veterinaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Mostrar los datos de la tabla de clientes
$sql_clientes = "SELECT * FROM cliente";
$result_clientes = $conn->query($sql_clientes);

echo "<h2>Tabla de Clientes</h2>";
if ($result_clientes->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>ID Cliente</th>
    <th>Nombre Cliente</th>
    <th>DNI Cliente</th>
    <th>Email Cliente</th>
    <th>Teléfono Cliente</th>
    </tr>";
    
    // Salida de datos de cada fila
    while($row = $result_clientes->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["idCliente"]."</td>";
        echo "<td>".$row["nombreCliente"]."</td>";
        echo "<td>".$row["dniCliente"]."</td>";
        echo "<td>".$row["emailCliente"]."</td>";
        echo "<td>".$row["telefonoCliente"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay resultados en la tabla de clientes.";
}

//  Mostrar los datos de la tabla de mascotas
$sql_mascotas = "SELECT * FROM mascota";
$result_mascotas = $conn->query($sql_mascotas);

echo "<h2>Tabla de Mascotas</h2>";
if ($result_mascotas->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>ID Mascota</th>
    <th>Nombre Mascota</th>
    <th>Edad Mascota</th>
    <th>Peso Mascota</th>
    <th>Descripción Mascota</th>
    <th>ID Cliente</th>
    </tr>";
    
    // Salida de datos de cada fila
    while($row = $result_mascotas->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["idMascota"]."</td>";
        echo "<td>".$row["nombreMascota"]."</td>";
        echo "<td>".$row["edadMascota"]."</td>";
        echo "<td>".$row["pesoMascota"]."</td>";
        echo "<td>".$row["descripcionMascota"]."</td>";
        echo "<td>".$row["idCliente"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay resultados en la tabla de mascotas.";
}

// Cerrar conexión
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