<?php
	$nombre = $_POST['nombre'];
	$pat = $_POST['paterno'];
	$mat = $_POST['materno'];
	$usuario = $_POST['usuario'];
	$pasword = $_POST['pasword'];


	try{
		$base = new PDO('mysql:host=localhost; dbname=documentos', 'root', '');
		$base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								
		$base -> exec("SET CHARACTER SET utf8");
						
		$sql="insert into usuario (nombre, ap_pat,ap_mat,usuario,password) values ('$nombre','$pat','$mat','$usuario','$pasword')"; //consulta
		$resultado = $base -> prepare($sql);
		$resultado -> execute(array());

		echo "<h2>Los siguientes datos del usuario:</h2>";
		echo "<table>";
			echo "<tr>";
				echo "<td>Nombre: </td>";
				echo "<td>" . $nombre . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Apellido: </td>";
				echo "<td>" . $pat . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>C. I.: </td>";
				echo "<td>" . $mat . "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Usuario: </td>";
				echo "<td>" . $usuario . "</td>";
			echo "</tr>";
		echo "</table>";
		echo "<h2>HA SIDO REGISTRADO CORRECTAMENTE</h2>";
		echo "<a href='../paginas/nuevo.php'>Atras</a>";
		$resultado -> closeCursor();

	} CATCH(Exception $e){
		die('Error: ' . $e -> GetMessage());
		echo "erro en la linea: " . $e -> getLine();
	}
?>