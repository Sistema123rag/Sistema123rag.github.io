<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, incitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Gobierno Autónomo Municipal Rural</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/nuevo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,800;1,300;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="Ing_sis.php">Ingreso al Sistema</a>
            <a href="Información.html">Acerca de </a>
            <a href="Panel Informativo.php">Panel Informativo</a>
            <a href="Tramites.php">Servicios y Tramites</a>
        </nav>
        <div  style="width:400px; margin: auto; padding: 30px 10px;background: hsla(147, 53%, 61%, 0.507)">
            <h1 class="h3">REVISAR TRAMITE</h1>
            <form class="container" method="post" action="buscar.php">
                <table>
                    <tr>
                        <td>CI:</td>
                        <td><input class="input-contenedor" type="text" name="ci"></td>
                    </tr>
                    <tr>
                        <td>Código del Tramite</td>
                        <td><input class="input-contenedor" type="text" name="codigo"></td>
                    </tr>
                    
                    <tr >
                        <td colspan="2">&nbsp; &nbsp; &nbsp; &nbsp;<input class="button" type="submit"  name="buscar" value=" BUSCAR "></td>
                    </tr>
                </table>
            </form>
        </div>
      
    </header>
    
    
</body>
</html>