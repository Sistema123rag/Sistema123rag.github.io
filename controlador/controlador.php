<?php
if(!empty($_POST["registro"])){
    if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["clave"])){
        echo '<div class="alerta"> Los campos estan vacios </div>';
    } else {
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $usuario=$_POST["usuario"];
        $clave=$_POST["clave"];
        $sql=$conexion->query("insert into registro(Nombres,Apellidos,Usuario,Contraseña)value('$nombre','$apellido','$usuario','$clave')");
        if($sql==1){
            echo '<div class="ok"> Usuario Registrado Correctamente </div>';
        }else{
            echo '<div class="alerta"> Error al Registrar </div>';
        }
    }

} 

?>