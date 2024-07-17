<?php

session_start();

include_once('registroConexion.php');

if (isset($_POST['Usuario']) && isset($_POST['NombreCompleto']) && isset($_POST['Contrasena']) && isset($_POST['RContrasena'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $nombreCompleto = validate($_POST['NombreCompleto']);
    $Contrasena = validate($_POST['Contrasena']);
    $RContrasena = validate($_POST['RContrasena']); 

    $datosUsuarios = 'Usuario=' . $Usuario . '&NombreCompleto' . $nombreCompleto;

    if (empty($Usuario) || empty($nombreCompleto) || empty($Contrasena) || empty($RContrasena)) { 
        header("Location: registrarseForm.php?error=Todos los campos son requeridos&$datosUsuarios");
        exit();
    } elseif ($Contrasena !== $RContrasena) {
        header("Location: registrarseForm.php?error=Las contraseñas ingresadas no coinciden&$datosUsuarios");
        exit();
    } else {
        $Contrasena = md5($Contrasena);

        $sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$Usuario'"; 
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) { 
            header("Location: registrarseForm.php?error=El usuario ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO usuarios(nombreUsuario, nombreCompleto, contrasena) VALUES('$Usuario','$nombreCompleto','$Contrasena')"; 
            $query2 = $conexion->query($sql2);

            if($query2){
                header("Location: registrarseForm.php?success=Usuario creado con éxito");
                exit();  
            } else {
                header("Location: registrarseForm.php?error=Ocurrió un error");
                exit();  
            }
        }
    }
} else {
    header('Location: registrarseForm.php'); 
    exit();
}
?>
