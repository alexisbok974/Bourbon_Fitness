<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href ="styleInscription.css">
</head>
<body>
    
<div id =photo1>
        
        <section>
            <form action ="insert.php" method="POST">
                <label>Identifiant</label>
                <input type ="text" name ="login" placeholder=" veuillez saisir un identifiant">
                <label>Mot de passe </label>
                <input type="password" name="mdp" placeholder="veuillez saisir un Mot de passe">
                <input type="submit" id="btn" value="S'inscrire" name ="bouton-valider">
            </section>
</div>

</body>
</html>
