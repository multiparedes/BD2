<?php
    include "conexio_masc.php";

    $string = "Select * from mascota";
    
    $consulta = mysqli_query($conexio, $string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzador BD</title>

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
</head>
<body>
    <main>
    <table>
        <tr>
            <td>ID </td>
            <td>NOM </td>
            <td>TIPUS </td>
            <td>PROPIETARI </td>
        </tr>

        <?php 
        while($reg = mysqli_fetch_array($consulta)) {    
        ?>

        <tr>
            <td><?php echo $reg["idmasc"];?></td>
            <td><?php echo $reg["nommasc"];?></td>
            <td><?php echo $reg["tipusmasc"];?></td>
            <td><?php echo $reg["propmasc"];?></td>

            <td>
                <?php $modificar_id = "masc_mod.php?id=".$reg["idmasc"]?>

                <a href="<?php echo $modificar_id ?>">Modificar</a>
            
            </td>
        </tr>

        <?php }?>
    </table>
    <a href="masc_alta.html">Donar d'alta</a>

        </main>
</body>
</html>