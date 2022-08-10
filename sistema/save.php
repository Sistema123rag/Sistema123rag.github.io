<?php

include("../controlador/controlador1.php");

if (isset($_POST['save_datos'])){
    $areaDep = $_POST['areaDep'];
    $descri = $_POST['descri'];
    
    $query = "INSERT INTO datos(areaDep, descri) VALUES ('$areaDep', '$descri')";

    $result = mysqli_query($conn, $query);
    if (!$result){
        die("error");
    }
    $_SESSION['message'] = 'Task Saved Succesfully';
    $_SESSION['message_type']= 'success';
    header("location: Jef_Cont.php");
}
?>