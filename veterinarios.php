<?php
include("seguridad.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mascotaStyle.css">
  <title>Veterinaria</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #4CAF50;
      padding: 20px;
      text-align: center;
      color: white;
    }
    nav {
      text-align: center;
      background-color: #f2f2f2;
      padding: 10px;
    }
    nav a {
      text-decoration: none;
      color: #333;
      padding: 10px;
    }
    nav a:hover {
      background-color: #ddd;
    }
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

<header>
  <h1>Veterinaria</h1>
</header>

<nav>
  <a href="historialMedico.php">Cargar Historial Médico</a>
  <a href="consultasHistorial.php">Consultar Historial</a>
  <a href="consultasClientes.php">Ver Consultas de Clientes</a>
  <a href="agregarMascotaCliente.php">Agregar una Mascota o un Cliente</a>
  <a href="mascotasClientes.php">Ver Listado de Mascotas y Clientes</a>
  <!-- Aquí agregamos el botón de Cerrar Sesión -->
  <a href="cerrarSesion.php">Cerrar Sesión</a>
</nav>

<footer>
  <p>&copy; 2024 Veterinaria</p>
</footer>

</body>
</html>

