<?php
include("seguridad.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Consultas Veterinarias</title>
    <link rel="stylesheet" href="styleHistorial.css">
    <!-- Agregar enlace al ícono de WhatsApp -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Estilos para el botón de WhatsApp */
        #whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }

        #whatsapp-button a {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #25D366;
            color: #fff;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 24px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        #whatsapp-button a:hover {
            background-color: #128C7E;
        }

        /* Estilos adicionales para el formulario */
        form {
            margin-bottom: 20px; /* Ajustar para dejar espacio entre el formulario y el botón de cerrar sesión */
        }

        h2 {
            margin-bottom: 20px; /* Espaciado inferior para separar el título del formulario */
        }

        label, input, textarea {
            display: block;
            margin-bottom: 10px; /* Espaciado inferior para separar los elementos del formulario */
        }

        /* Estilos para el botón de Cerrar Sesión */
        #cerrar-sesion {
            text-align: center;
            margin-bottom: 20px; /* Espaciado para separar el botón de cerrar sesión del contenido debajo */
        }

        #cerrar-sesion a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff0000; /* Color de fondo del botón */
            color: #fff; /* Color del texto del botón */
            text-decoration: none;
            border-radius: 5px; /* Bordes redondeados */
            transition: background-color 0.3s ease;
        }

        #cerrar-sesion a:hover {
            background-color: #cc0000; /* Cambio de color al pasar el mouse */
        }
    </style>
</head>
<body>
    <h2>Formulario de Consultas Veterinarias</h2>
    <form action="consultasConexion.php" method="POST">
        <label for="idMascota">ID de Mascota:</label>
        <input type="text" id="idMascota" name="idMascota" required>

        <label for="nombreDueño">Nombre del Dueño:</label>
        <input type="text" id="nombreDueño" name="nombreDueño" required>

        <label for="motivoConsulta">Motivo de la Consulta:</label>
        <textarea id="motivoConsulta" name="motivoConsulta" rows="4" cols="50" required></textarea>

        <label for="emailDueño">Email del Dueño:</label>
        <input type="email" id="emailDueño" name="emailDueño" required>

        <label for="telefonoDueño">Teléfono del Dueño:</label>
        <input type="tel" id="telefonoDueño" name="telefonoDueño" required>

        <input type="submit" value="Guardar">
    </form>

    <!-- Botón de Cerrar Sesión -->
    <div id="cerrar-sesion">
        <a href="cerrarSesion.php">Cerrar Sesión</a>
    </div>

    <h3>Si tenés una emergencia, contactanos</h3>

    <!-- Botón de WhatsApp -->
    <div id="whatsapp-button">
        <a href="https://wa.me/542617038693" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </div>
</body>
</html>
