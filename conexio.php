<?php
    $conexio = mysqli_connect("localhost","root","");

    $db = mysqli_select_db($conexio,"2022BD2")
    or die("Fatal error : Database  error!");
?>