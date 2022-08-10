<?php 

include ("../controlador/controlador1.php");

if(isset($_GET['cite'])) {
    $cite = $_GET['cite'];
    $query = "SELECT * FROM datos WHERE cite = $cite";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $areaDep = $row['areaDep'];
        $descri = $row['descri'];
        
    }

}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $title = $_POST['title'];
    $descri = $_POST['descri'];

    $query= "UPDATE task set title='$title', descri = '$descri' WHERE cite = $cite";
    mysqli_query($conn, $query);

    $_SESSION['messge'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header("location: Jef_Cont.php");
}

?>
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
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php"cite=<?php echo $_GET['cite']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="areaDep" value="<?php echo $areaDep;?>" class="form control" placeholder="editar documento"></input>
                        </div>
                        <div class="form group">
                            <input type="text" name="descri" value="<?php echo $descri;?>" class="form-control" placeholder="editar Description"></input>
                        </div>
                        <button class="btn btn-success" name="update">
                           Editar documento
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>
