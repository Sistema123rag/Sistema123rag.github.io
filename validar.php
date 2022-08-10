<?php

if (!empty($_POST["btningr"])) {
    if(empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="bad">LOS CAMPOS ESTAN VACIOS</div>';
    }else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query("insert into registro(Usuario,Contraseña)value('$usuario','$clave')");
        if($sql==1){
            header("location:sistema/pant_sis.html");
        }else{
            echo '<div class="bad"> ACCESO DENEGADO </div>';
        }
    }
}

?>




