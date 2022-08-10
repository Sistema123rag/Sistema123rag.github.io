<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, incitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Gobierno Autónomo Municipal Rural</title>
    <link rel="shortcut icon" href="icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilo.css">

    <link rel="stylesheet" href="../css/nuevo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,800;1,300;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="nuevo.php">Nuevo Usuario</a>
            <a href="tramite.php">Nuevo Tramite</a>
            <a href="actualizar.php">Actualizar Tramite </a>
            <a href="listar.php">Lista de tramites</a>
            <a href="cerrar_sesion.php">Terminar</a>
        </nav>
        <h1>LISTADO DE TRAMITES REALIZADOS</h1>
        <div style="border:none; margin: auto; color:black ; border-radius: 1%;width: 900px; padding: 3px ; background: white;font-size: 16px">
       
       
            
           
            <?php

                echo "<table>
                    <tr style='border: none; color: white;text-align:center;padding: 15px 10px;background: hsl(34, 95%, 48%); font-size: 18px;width: 100%'>
                        
                        <td><b>Código </b></td>
                        <td><b>Nombre</b></td>
                        <td><b>Ap. Paterno</b></td>
                        <td><b>Ap. Materno</b></td>
                        <td><b>C. I.</b></td>
                        <td><b>Documento</b></td>
                        <td><b>Estado</b></td>
                    </tr>";
                try{
                    $base = new PDO('mysql:host=localhost; dbname=documentos', 'root', '');
                    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $base -> exec("SET CHARACTER SET utf8");

                    $sql = "select * from documento";
                    $resultado = $base -> prepare($sql);
                    $resultado -> execute(array());
                    while($registro = $resultado -> fetch(PDO::FETCH_ASSOC)){
                        echo "<tr >";
                            
                            echo "<td><a>" . $registro['codigo'] . "</a></td>";
                            echo "<td><a>" . $registro['nombre']. "</a></td>";
                            echo "<td><a>" . $registro['ap_pat'] . "</a></td>";
                            echo "<td><a>" . $registro['ap_mat'] . "</a></td>";
                            echo "<td><a>" . $registro['ci'] . "</a></td>";
                            echo "<td><a>" . $registro['nombre_archivo'] . "</a></td>";
                            echo "<td><a>" . $registro['estado'] . "</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    $resultado -> closeCursor();
                } CATCH(Exception $e){
                    die('Error: ' . $e -> GetMessage());
                }
            ?>
 
           
        </div>
    </header>
 

</body>
</html>