<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <p> vout est sur la page d'accueil </p>
     <!-- Bouton de déconnexion -->
     <form method="post" action="deconnexion2.php">
            <input type="submit" name="deconnexion" value="Déconnexion">
        </form>
    <?php
        
        include("insert.php");

        if ($_SESSION['conn']==="OK"){
            echo("con ok ") ;
            exit();
        }
        else{
            header("location:Inscription.php");
        }
        ?>

</body>
</html>

