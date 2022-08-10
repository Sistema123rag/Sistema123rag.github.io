<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, incitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar tramite</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/nuevo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,800;1,300;1,700&display=swap" rel="stylesheet">
</head>


<?php
echo "<h1>HA SIDO ACTUALIZADO CORRECTAMENTE</h1>";
echo "<div style='text-align: center; border: 1px solid black; color:black ;width:600px; font-size: 30px ;margin: auto; padding; 30px'><br>";
    $ci = $_POST['ci'];
    $codigo = $_POST['codigo'];
    $estado = $_POST['estado'];

    echo $ci;
    echo $codigo;
    echo $estado;
    /* aqui s la base de datos*/

    
    try{
        $base = new PDO('mysql:host=localhost; dbname=documentos', 'root', '');
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
        $base -> exec("SET CHARACTER SET utf8");
		$sql="Update documento Set estado ='$estado ' Where codigo ='$codigo'";
        


            
            /*"update documento set estado = '$estado' where ci = '$ci AND codigo = '$codigo')"; //consulta*/
        $resultado = $base -> prepare($sql);
        $resultado -> execute(array());

        
        
        echo "<a href='../paginas/actualizar.php'><input style='text-algin:center;margin-top:20px;border:none;width: 250px;color: white;font-size: 20px; background: #1a2537;border-radius: 5px;cursor: pointer padding: 20px 0px 0 10px' type='button' name='atras' value=' REGRESAR '></a>";

        $resultado -> closeCursor();

    } CATCH(Exception $e){
        die('Error: ' . $e -> GetMessage());
        echo "error en la linea: " . $e -> getLine();
    }
    
?>