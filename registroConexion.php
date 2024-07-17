<?php
    $host = "localhost:3310";
    $user = "root";
    $pass = "";
    $db = "veterinaria";

    $conexion = new mysqli($host, $user, $pass, $db); 

    if($conexion->connect_error) { 
        die("Conexión Fallida: " . $conexion->connect_error); 
    }
?>
