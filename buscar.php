
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
	$codigo = $_POST['codigo'];
    $ci = $_POST['ci'];


	try{
		$base = new PDO('mysql:host=localhost; dbname=documentos', 'root', '');
		$base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							
		$base -> exec("SET CHARACTER SET utf8");
		
		$sql = "select * from documento where codigo = '$codigo' AND ci = '$ci'";
		$resultado = $base -> prepare($sql);
		$resultado -> execute(array());
        $registro = $resultado -> fetch(PDO::FETCH_ASSOC);
		
        echo "<h1>ESTIMADO USUARIO:</h1>";
		echo "<div style='width:400px; margin: auto; border: 2px solid black; padding: 15px 10px'><br>";
		echo "<table>";
			echo "<tr>";
				echo "<td><b style=''>Nombre: </b></td>";
				echo "<td>" . $registro['nombre'] . " " . $registro['ap_pat'] . " " . $registro['ap_mat'] . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Con Cedula de identidad: </b></td>";
				echo "<td>" . $registro['ci'] . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Codigo de tramite: </b></td>";
                echo "<td>" . $registro['codigo'] . "</td>";
			echo "</tr>";
		echo "</table>";
        echo "<b style=' font-size: 20px;'>Su tramite se encuentra: </b><h1 style='text-align: center;padding: 20px;color: #1a2537;font-size: 50px'>" . $registro['estado'] ."</h1>";
        echo "<h1 style='text-align: center;padding: 5px;color: orange;font-size: 25px';>-----------  GRACIAS ---------</h1>";
		echo "<a  style='margin-top: auto;border:none;width: 100%;color: white;font-size: 15px; background: #1a2537;padding: 10px 50px;border-radius: 5px;cursor: pointer;'href='Tramites.php'>Atras</a>";

		$resultado -> closeCursor();
	} CATCH(Exception $e){
		die('Error: ' . $e -> GetMessage());
	}
	
?>