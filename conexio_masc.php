<?php
    $conexio = mysqli_connect("localhost","root","");

    $db = mysqli_select_db($conexio,"20220925mascotes")
    or die("Fatal error : Database  error!");
?>