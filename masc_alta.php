

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
                p {
                padding: 0.5em;
                background-color: #F2F3F5;
                }
        </style>
</head>
<body>
        <?php
                $nom = $_GET["nom"];
                $tipus = $_GET["tipus"];
                $prop = $_GET["prop"];

                $string = "INSERT INTO mascota (nommasc, tipusmasc, propmasc) 
                VALUES (\"$nom\", \"$tipus\", \"$prop\")";

                include "conexio_masc.php";
                $insert = mysqli_query($conexio, $string);
        ?>
        <h1>Insert realitzat correctament!<br></h1>
        <p>CODI EXECUTAT:<br><?php echo $string?></p><br>
        <a href="masc_main.php">Tornar al main</a>
</body>
</html>