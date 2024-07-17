<?php
session_start();
include('conexion.php');

if(isset($_POST['Usuario']) && isset($_POST['Contrasena'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Contrasena = validate($_POST['Contrasena']);

    if (empty($Usuario)) {
        header("Location: index.php?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($Contrasena)) {
        header("Location: index.php?error=La Contraseña Es Requerida");
        exit();
    } else {
        //$Contrasena = md5($Contrasena);

        $Sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$Usuario'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (strtolower($row['nombreUsuario']) === strtolower($Usuario) && $row['contrasena'] === $Contrasena) {
                $_SESSION['Usuario'] = $row['nombreUsuario'];
                $_SESSION['idUsuario'] = $row['idUsuario'];
                // Verificar si el usuario es VeterinariaPulguitas
                if(strtolower($Usuario) === 'veterinariapulguitas'){
                    header("Location: veterinarios.php");
                    exit();
                } else {
                    header("Location: consultaForm.php");
                    exit();
                }
            } else {
                header("Location: index.php?error=El usuario o la contraseña son incorrectas");
                exit();
            }
        } else {
            header("Location: index.php?error=El usuario o la contraseña son incorrectas");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>

