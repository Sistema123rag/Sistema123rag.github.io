<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, incitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Gobierno Autónomo Municipal Rural</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
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
        
        <div style="width:400px; margin: auto; padding: 10px 15px;background: hsla(147, 53%, 61%, 0.507)">
            <h1>NUEVO USUARIO</h1>
            <form class="container" method="post" action="registro_usuario.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Ap. Paterno:</td>
                        <td><input type="text" name="paterno"></td>
                    </tr>
                    <tr>
                        <td>Ap. Materno:</td>
                        <td><input type="text" name="materno"></td>
                    </tr>
                    <tr>
                        <td>Usuario:</td>
                        <td><input type="text" name="usuario"></td>
                    </tr>
                    
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pasword"></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input class="button" type="reset" name="reset" value=" BORRAR ">&nbsp; &nbsp; &nbsp; &nbsp;<input class="button" type="submit" name="guardar" value=" REGISTRAR "></td>
                    </tr>
                </table>
            </form>
        </div>
    </header>
 

</body>
</html>