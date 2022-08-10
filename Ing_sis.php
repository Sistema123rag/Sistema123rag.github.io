

<?php include("template/cabecera.php"); ?>

<?php
  
  include ("validar.php");
?>

<body >  
<from class="for">
<div class="login-content">
  <form method="post" action="acceso.php">
  <h1> INGRESO AL SISTEMA </h1>
    <div class="cont">
      
      <div class="input-contenedor">
        <input id="usuario" name="usuario" type="text" placeholder="Ingrese su Usuario">
      </div>

      <div class="input-contenedor">
        <input id="password" name="password" type="password" placeholder="Ingrese su Contraseña" onclick="vista()">
      </div>

      <input id="btningr" name="btningr" type="submit" value="INGRESAR" class="button">
      <a class="link" href="index.html"> Volver a inicio</a>
    </div>
</div>
</from>

</body>
</html>
