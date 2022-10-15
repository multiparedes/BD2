<?php
    $id = $_GET["id"];
    $string = "DELETE from persona where dni = ".$id;
    echo $string;
    include "conexio.php";
    $delete=mysqli_query($conexio,$string);
?>