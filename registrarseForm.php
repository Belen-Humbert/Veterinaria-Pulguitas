<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registrarse</title>
</head>

<body>
    <div class="contenedor">
        <h1><ins></ins></h1>
        <br>
        <form action="Registrarse.php" method="POST">

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            <br>
            <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']?></p>
            <?php } ?>    
            <label for="">
            <i class="fa-solid fa-user"></i>
            Usuario
            </label>
        <input type="text"  placeholder="Ingrese Usuario" name="Usuario">
        <label for="">
        <i class="fa-solid fa-user"></i>
            Nombre Completo
            </label>
        <input type="text" placeholder="Ingrese Nombre Completo" name="NombreCompleto">
        <label for="">
        <i class="fa-solid fa-key"></i>
            Contraseña
        </label>
        <input type="password" placeholder="Ingrese Contraseña" name="Contrasena">
        <label for="">
        <i class="fa-solid fa-key"></i>
            Repetir Clave
            </label>
            <input type="password" placeholder="Repetir Contraseña" name="RContrasena">
        <input type="submit" class="button" value="Registrarse">

        
        <a href="index.php">Ingresar</a>
         
    </form>
</div>
</html>