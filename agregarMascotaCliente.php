<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mascotasStyle.css">
    <title>Formulario de Ingreso</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Formulario de Ingreso de Mascotas</h2>
            <form action="agregarMascotaClienteCon.php" method="POST" class="green-form">
                <label for="nombreMascota">Nombre:</label>
                <input type="text" id="nombreMascota" name="nombreMascota">
                
                <label for="edadMascota">Edad:</label>
                <input type="number" id="edadMascota" name="edadMascota">
                
                <label for="pesoMascota">Peso:</label>
                <input type="number" id="pesoMascota" name="pesoMascota">
                
                <label for="descripcionMascota">Descripción:</label>
                <textarea id="descripcionMascota" name="descripcionMascota" rows="4" cols="50"></textarea>
                
                <label for="idCliente">ID Cliente:</label>
                <input type="number" id="idCliente" name="idCliente">
                
                <button type="submit">Enviar</button>
            </form>
        </div>
        
        <div class="form-container">
            <h2>Formulario de Ingreso de Clientes</h2>
            <form action="agregarMascotaClienteCon.php" method="POST" class="green-form">
                <label for="nombreCliente">Nombre:</label>
                <input type="text" id="nombreCliente" name="nombreCliente">
                
                <label for="dniCliente">DNI:</label>
                <input type="text" id="dniCliente" name="dniCliente">
                
                <label for="emailCliente">Email:</label>
                <input type="email" id="emailCliente" name="emailCliente">
                
                <label for="telefonoCliente">Teléfono:</label>
                <input type="text" id="telefonoCliente" name="telefonoCliente">
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>
