<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterinaria Pulguitas</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Estilos adicionales */
    body {
      background-color: #ffffff; /* Blanco */
      color: #000000; /* Negro */
    }
    .navbar {
      background-color: #28a745; /* Verde */
    }
    /* Estilos para el footer */
    .footer {
      background-color: #f8f9fa; /* Color de fondo gris claro */
      padding: 20px 0;
      text-align: center;
    }
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
      margin-bottom: 100px; /* Ajustar para evitar que el botón de WhatsApp se solape con el formulario */
    }

    h2 {
      margin-bottom: 20px; /* Espaciado inferior para separar el título del formulario */
    }

    label, input, textarea {
      display: block;
      margin-bottom: 10px; /* Espaciado inferior para separar los elementos del formulario */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Pulguitas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Mi cuenta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Sobre nosotros</h2>
      <p>Aquí puedes encontrar información sobre la veterinaria Pulguitas y nuestra ubicación.</p>
      <p>En el año 2000 el doctor Fabio Velazquez, funda la Veterinaria con el propósito de ofrecer servicios profesionales de calidad a mascotas caninas y felinas. La prestigiosa trayectoria en el ámbito público y privado de su director y la formación de equipos profesionales, permiten a la organización un rápido crecimiento en sus inicios, el cual se sostiene año a año, mediante un trato personalizado a sus clientes, la permanente capacitación de sus profesionales, la incorporación de nuevas tecnologías y sobre todo, el amor a las mascotas. </p>
    </div>
    <div class="col-md-6">
      <!-- mapa de Google Maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.640637451702!2d-68.409895!3d-32.7544236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e3b260c90c745%3A0x9417b55f2ab404fb!2sCosta%20de%20Araujo%2C%20Mendoza!5e0!3m2!1sen!2sar!4v1645200667066!5m2!1sen!2sar" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>

<!-- Sección de Veterinarios -->
<div id="veterinarios" class="container mt-5">
  <h2>Nuestros Veterinarios</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://th.bing.com/th/id/OIP.V0OPngpq3xDGM6O7GPCBWAHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="Nombre del Veterinario">
        <div class="card-body">
          <h5 class="card-title">Aldana Luján</h5>
          <p class="card-text">Especialista en animales rurales y de granja</p>
        </div>
      </div>
    </div>
    <!-- Repite esta estructura para cada veterinario -->
    <div class="col-md-4">
      <div class="card">
        <img src="https://th.bing.com/th/id/R.9db40bb36fb20ddedfe579d9e4d22942?rik=w7eTZ8Y18zDdxw&riu=http%3a%2f%2fblog.infoempleo.com%2fmedia%2f2017%2f07%2fThinkstockPhotos-807833246.jpg&ehk=1hpwQRzi%2bD1OXXY2G0aRHtNqSg1%2ftQYbFUKzG9mrjFs%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Nombre del Veterinario">
        <div class="card-body">
          <h5 class="card-title">Mercedes Rinaldi</h5>
          <p class="card-text">Diez años de experiencia cuidando la salud de nuestros animales domésticos</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="whatsapp-button">
  <a href="https://wa.me/542612090061" target="_blank"><i class="fab fa-whatsapp"></i></a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
