<?php include ("../controlador/controlador1.php") ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE DOCUMENTACIÓN DEL AREA ADMINISTRATIVA</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="conteiner">
            <a href="Jef_Cont.php" class="navbar-brand"> REGISTRO DE DOCUMENTACIÓN DEL ÁREA ADMINISTRATIVA</a>
            <a href="pant_sis.html" class="navbar-brand"> CERRAR CESSION </a>
        </div>
        
    </nav>


    <div class="container p-4">
        <div class="col-md-4">

<?php if (isset($_SESSION['message'])){ ?>
    <div class="alert alert-<?= $_SESSION['message_type'];?> 
    alert-dismissible fade show" role="alert">
    <?= $_SESSION['message'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       <span aria-hidden="true">&times;</span>
    </div>
<?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="areaDep" class="form-control" placeholder="Nombre Del Área" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="descri" class="form-control" placeholder="Descripción del Documento" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_datos" value="Registrar">
                </form>
            </div>

        </div>

        <div class="col-md-8">
            <table class="table table-borderd">
                <thead>
                    <tr>
                        <th>Nro CITE</th>
                        <th>AREA O DEPARTAMENTO</th>
                        <th>DESCRIPCION</th>
                        <th>FECHA</th>
                        <th>ACTION</th>
                        <th>ESTADO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM datos";
                    $result_tasks = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_tasks)){ ?>
                    <tr>
                        
                        <td> <?php echo $row['cite'] ?></td>
                        <td> <?php echo $row['areaDep'] ?></td>
                        <td> <?php echo $row['descri'] ?></td>
                        <td> <?php echo $row['fecha'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['cite']?>"class="btn btn-secundary">
                            <i class="fas fa-marker"></i>
                            </a>
                            <a href="delete.php?id=<?php echo $row['cite']?>"class="btn btn">
                            <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                        <td> <?php echo $row['estado'] ?></td>
                    </tr>

                    <?php } ?>
                    
                </tbody>

            </table>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>