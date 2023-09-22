<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body>

    <div id =photo1>
        
    <section>
        <form action ="verification.php" method="POST">
            <?php 
                if(isset($_GET['error'])){ ?>
                    <p class= "error"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>
            
            
            
            <label>Identifiant</label>
            <input type ="text" name ="login" placeholder="identifiant">
            <label>Mot de passe </label>
            <input type="password" name="mdp" placeholder="Mot de passe">
            <input type="submit" id="btn" value="Se connecter" name ="bouton-valider">
                </section>
    </div>
</body>
</html>
