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
    <header >
        <nav>
            <a href="nuevo.php">Nuevo Usuario</a>
            <a href="tramite.php">Nuevo Tramite</a>
            <a href="actualizar.php">Actualizar Tramite </a>
            <a href="listar.php">Lista de tramites</a>
            <a href="cerrar_sesion.php">Terminar</a>
        </nav>
        
        <div style="width:400px; margin: AUTO; padding: 10px 15px;background: hsla(147, 53%, 61%, 0.507)">
            <h1>NUEVO TRAMITE DIRECCIÓN 
                ADMINISTRATIVA FINANCIERA</h1>
            <form class="container1" method="post" action="registrar_tramite.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>CI:</td>
                        <td><input class="input-contenedor" type="text" name="ci"></td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><input class="input-contenedor" type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Ap. Paterno:</td>
                        <td><input class="input-contenedor" type="text" name="paterno"></td>
                    </tr>
                    <tr>
                        <td>Ap. Materno:</td>
                        <td><input class="input-contenedor" type="text" name="materno"></td>
                    </tr>
                    <tr>
                        <td>Tramite:</td>
                        <td>
                            <select class="input-contenedor" name="tramite" id="tramite">
                                <optgroup label="Solicitudes">
                                    <option value="212.10.01">Avalúo</option>
                                    <option value="212.10.02">Planimetria</option>
                                    <option value="212.10.03">Planos</option>
                                </optgroup>
                                <optgroup label="Aprobaciones">
                                    <option value="212.20.01">Planos</option>
                                    <option value="212.20.02">Proyectos de produccion</option>
                                    <option value="212.20.03">Proyectos productivos</option>
                                </optgroup>
                                <optgroup label="Informes finales">
                                    <option value="212.30.01">Informe 1</option>
                                    <option value="212.30.02">Informe 2</option>
                                    <option value="212.30.03">Informe 3</option>
                                </optgroup>
                                <optgroup label="Segimiento Impuestos">
                                    <option value="212.30.01">Vehiculos</option>
                                    <option value="212.30.02">Casas</option>
                                    <option value="212.30.03">Patentes</option>
                                </optgroup>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Archivo:</td>
                        <td><input class="input-contenedor" type="file" name="archivo"></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;<input class="button" type="submit" name="guardar" value=" REGISTRAR "></td>
                    </tr>
                </table>
            </form>
        </div>
    </header>
 

</body>
</html>