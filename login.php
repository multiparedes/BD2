<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Inici de sessió</h2>

        <form method="POST">
            <div>
            <label for="usuari">Nom d'usuari </label>
            <input type="text" name="usuari" id="usuari" required>
            </div>
            <br>
            <div>
            <label for="contrasenya">Contrasenya </label>
            <input type="password" name="contrasenya" id="contrasenya" required>
            </div>
            <br>
            <input type="submit" name="submit" value="Iniciar">
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = $_POST["usuari"];
                $pass = $_POST["contrasenya"];

                include "conexio_masc.php";
                $select_str = "SELECT usuari,contrasenya FROM propietari WHERE usuari = '".$user."'";

                $consulta = mysqli_query($conexio, $select_str);
                $select = mysqli_fetch_array($consulta);

                if($select["usuari"] != NULL) {
                    if($select["contrasenya"] == $pass) {
                        header("Location: ./masc_main.php/");
                    } else {
                        echo "<p class='error'>Contrasenya incorrecte</p>";
                    }
                } else {
                    echo "<p class='error'>No existeix l'usuari.</p>";
                }
            }
        ?>
        
    </div>   
</body>
</html>