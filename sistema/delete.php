<?php

include("../controlador/controlador1.php");

if(isset($_GET['cite'])) {
    $id = $_GET['cite'];
    $query = "DELETE FROM datos WHERE cite= $cite";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die ("Query Failed");
    }
     
    $_SESSION['message'] = 'Task Removed Successfully';
    $_SESSION['message_type'] = 'danger';
    header ("location: Jef_Cont.php");
}

?>