<?php
        $nom = $_GET["nom"];
        $cognoms = $_GET["cognoms"];

        $string = "INSERT INTO persona (nom, cognoms) 
                VALUES (\"$nom\", \"$cognoms\")";

        echo $string;
        include "conexio.php";
        $insert = mysqli_query($conexio, $string);
?>