<?php
    $conexio = mysqli_connect("localhost","root","");

    $db = mysqli_select_db($conexio,"2022BD2")
    or die("Fatal error : Database  error!");

    $string = "Select * from persona";
    
    $consulta = mysqli_query($conexio, $string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzador BD</title>
</head>
<body>
    <main>
    <table>
        <tr>
            <td>DNI </td>
            <td>NOM </td>
            <td>COGNOMS </td>
        </tr>

        <?php 
        while($reg = mysqli_fetch_array($consulta)) {    
        ?>

        <tr>
            <td><?php echo $reg["dni"];?></td>
            <td><?php echo $reg["nom"];?></td>
            <td><?php echo $reg["cognoms"];?></td>

            <td>
                <?php $delete_id = "delete.php?id=".$reg["dni"] ?>

                <a href="<?php echo $delete_id ?>">Borrar</a>
            
            </td>
        </tr>

        <?php }?>

    </table>
        </main>
</body>
</html>