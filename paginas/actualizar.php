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

<body>
    <header>
        <nav>
            <a href="nuevo.php">Nuevo Usuario</a>
            <a href="tramite.php">Nuevo Tramite</a>
            <a href="actualizar.php">Actualizar Tramite </a>
            <a href="listar.php">Lista de tramites</a>
            <a href="cerrar_sesion.php">Terminar</a>
        </nav>
        
        <div style="width:400px; margin: auto; padding: 30px 10px;background: hsla(147, 53%, 61%, 0.507)">
            <h1>ACTUALIZAR TRAMITE</h1>
            <form class="container" method="post" action="actualizar_tramite.php">
                <table>
                    <tr>
                        <td>CI:</td>
                        <td><input type="text" name="ci"></td>
                    </tr>
                    <tr>
                        <td>Código del Tramite</td>
                        <td><input type="text" name="codigo"></td>
                    </tr>

                    <tr>
                        <td>Estado: </td>
                        <td>
                            <select style="whith:100%" name="estado" id="estado">
                                <option value=" '  ' Tramite Observado">Tramite Observado</option>
                                <option value=" '  ' Tramite Aprobado">Tramite Aprobado</option>
                                <option value=" '  ' Falta de Pago del Tramite">Falta de Pago del Tramite</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;<input class="button" type="submit" name="guardar" value=" ACTUALIZAR "></td>
                    </tr>
                </table>
            </form>
        </div>
    </header>
 

</body>
</html>