<?php
    $user = $_GET["usuari"];
    $pass = $_GET["contrasenya"];

    include "conexio_masc.php";
    $select_str = "SELECT usuari,contrasenya FROM propietari WHERE usuari = '".$user."'";

    $consulta = mysqli_query($conexio, $select_str);
    $select = mysqli_fetch_array($consulta);

    if($select["usuari"]!=NULL) {
        if($select["contrasenya"] == $pass) {
            echo "Contrasenya correcte";
        } else {
            echo "Contrasenya incorrecte";
        }
    } else {
        echo "No existeix l'usuari.";
    }


?>