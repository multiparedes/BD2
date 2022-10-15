<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 
        html{
            display: grid;
            place-items: center;
            height: 100vh;
        }

        body {
            text-align: center;
        }
    </style>
    <?php
        $id = $_GET["id"];

        $select_str = "SELECT * FROM `mascota` WHERE idmasc = ".$id;
        include "conexio_masc.php";
        $consulta = mysqli_query($conexio, $select_str);

        $select = mysqli_fetch_array($consulta);

        $update = "masc_update.php?id=".$id;
    ?>

</head>
<body>
    <form action=<?php echo $update?> method="get">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        NOM: <input type="text" name="nom" value="<?php echo $select["nommasc"] ?>"> <br> 
        TIPUS: <input type="text" name="tipus" value="<?php echo $select["tipusmasc"] ?>"> <br> 
        PROPMASC: <input type="number" name="prop" value="<?php echo $select["propmasc"] ?>"> <br> 

        <input type="submit">


    </form>


</body>
</html>