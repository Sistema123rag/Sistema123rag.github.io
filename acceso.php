<?php
	$usuario = $_POST['usuario'];
	$pasword = $_POST['password'];
	try{
		$base = new PDO('mysql:host=localhost; dbname=documentos', 'root', '');
		$base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
		$base -> exec("SET CHARACTER SET utf8");
        
		
		$sql2 = "select * from usuario where usuario = :uso and password = :pas";
		$resultado2 = $base -> prepare($sql2);
		$resultado2 -> execute(array(":uso" => $usuario, ":pas" => $pasword));
		$num_adm = $resultado2 -> rowCount();
		$resultado2 -> closeCursor();
		
		if($num_adm == 1){
			session_start();
			$_SESSION["documentos"] = $usuario;
			header("location:paginas/tramite.php");
		
		}else{
			echo "<h1>ERROR AL INGRESAR AL SISTEMA</h1>";
			echo "<h1>ERROR DE USUARIO O PASSWORD</h1>";
			echo "<h3><a href='Ing_sis.php'>Volver a intentarlo</a></h3>";
            header("location:Ing_sis.php");
		}
		
	} CATCH(Exception $e){
		die('Error: ' . $e -> GetMessage());
	} 	
?>