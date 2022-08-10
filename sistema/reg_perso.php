<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, incitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Gobierno Autónomo Municipales Rurales</title>
    <link rel="shortcut icon" href="../img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,800;1,300;1,700&display=swap" rel="stylesheet">
</head>


<body>
  <div class="container">
    <form action="" method="POST" class="formulario">
      <h2 class="titulo"> REGISTRO DE PERSONAL </h2>
      <?php 
      include ("../db.php");
      include ("../controlador/controlador.php");
      ?>
      <div class="padre">
        <div class="tex_cont">
          <input type="text" name="nombre" placeholder="Escriba sus Nombres">
        </div>
        <div class="tex_cont">
          <input type="text" name="apellido" placeholder="Escriba sus Apellidos">
        </div>
        <div class="tex_cont">
          <input type="text" name="usuario" placeholder="Escriba un Usuario">
        </div>
        <div class="tex_cont">
          <input type="password" name="clave" placeholder="Escriba una Contraseña">
        </div>
        <div class="cuenta">
          <input class="boton" type="submit" value="REGISTRAR" name="registro">
          <a class="link" href="pant_sis.html"> Salir </a>
        </div>
      </div>
    </form>
  </div>
</body>

</html>