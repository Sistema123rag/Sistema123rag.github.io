<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, incitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Gobierno Autónomo Municipal Rural</title>
    <link rel="shortcut icon" href="icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,800;1,300;1,700&display=swap" rel="stylesheet">
</head>


<?php

   if(isset($_POST['guardar'])){
	    
        $ci = $_POST['ci'];
        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];
        $tramite = $_POST['tramite'];
        $codigo = $tramite ." / ".substr($nombre,0, 1) .substr($paterno,0, 1) .  substr($materno,0, 1) ;
        $estado = "En tramite";

        $nom = $_FILES['archivo']['name'];
        $tipo = $_FILES['archivo']['type'];
        $tamano = $_FILES['archivo']['size'];
        $ruta = $_FILES['archivo']['tmp_name'];
        $destino = "../archivos/".$nom;
        
        if($nom != ""){
            if(copy($ruta,$destino)){
                
                try{
                    $base = new PDO('mysql:host=localhost; dbname=documentos', 'root', '');
                    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								
                    $base -> exec("SET CHARACTER SET utf8");
						
                    $sql="insert into documento (ci,nombre,ap_pat,ap_mat,estado,codigo,tamano,tipo,nombre_archivo) values ('$ci','$nombre','$paterno','$materno','$estado','$codigo','$tamano','$tipo','$nom')"; //consulta
                    $resultado = $base -> prepare($sql);
                    $resultado -> execute(array());
                      
                    echo "<h2 style='padding:0px 0px 10px 10px'>Ha sido registrado un nuevo tramite:</h2>";
                    echo "<div style='width:400px; margin: auto; border: 2px solid black; padding; 30px 10px 0px 10px'><br>";

                    echo "<div style='padding: 0px 15px'>Usuario: " . $nombre . " " . $paterno . " " . $materno;
                    echo "<br>Se le ha asignado el siguiente codigo de tramite:";
                    echo "<br><h1 align='center'>Nro.: " . $codigo . "</h1><br>";
                    echo "Cualquier duda puede apersonarse a nuestras ventanillas";
                    echo "<br></div>";
                
                    echo "<P align='center'><input style='border: none;width: 200px;color: white;font-size: 15px; background: #1a2537;padding: 10px 15px;border-radius: 5px;cursor: pointer;'type='button' name='print' value=' IMPRIMIR '></p>";
                    echo "<h2 align='center'>HA SIDO REGISTRADO CORRECTAMENTE</h2>";
                    echo "<a href='../paginas/tramite.php'><p align='center'><input style='border:none;width: 200px;color: white;font-size: 15px; background: #1a2537;padding: 10px 15px;border-radius: 5px;cursor: pointer' type='button' name='atras' value=' REGRESAR '></a>";

                   $resultado -> closeCursor();

                } CATCH(Exception $e){
                    die('Error: ' . $e -> GetMessage());
                    echo "erro en la linea: " . $e -> getLine();
                }

            } else{
                echo "<h2>NO HA SIDO REGISTRADO CORRECTAMENTE</h2>";
                echo "<a href='../paginas/tramite.php'><input type='button' name='atras' value=' REGRESAR '></a>";
            }
        }
    }
	

?>