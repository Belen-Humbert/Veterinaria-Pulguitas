<?php
// Iniciamos la sesión (si aún no está iniciada)
session_start();

// Verificamos si el usuario no está autenticado
if (!isset($_SESSION["Usuario"])) {
    // Si el usuario no está autenticado, lo redirigimos a la página de inicio de sesión
    header("Location: index.php");
    exit(); // Finalizamos el script para evitar que se ejecute más código
}
?>
