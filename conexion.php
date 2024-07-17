<?php
    $host = "localhost:3310";
    $user = "root";
    $pass = "";
    $db = "veterinaria";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    if(!$conexion) {
        echo "Conexión Fallida";
    }