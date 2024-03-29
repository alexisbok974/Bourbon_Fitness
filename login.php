<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href ="style/styleLogin.css">
    <link rel="stylesheet" href ="style/styleInscription.css">
</head>
<body>
<div class="slider">
        <img src="img/1.jpg"alt="img1"class ="img_slider active"/>
        <img src="img/2.jpg"alt="img2"class ="img_slider"/>
        <img src="img/3.jpg"alt="img3"class ="img_slider"/>
        <img src="img/4.jpg"alt="img4"class ="img_slider"/>
        <div class="suivant">
            <i class="fa-solid fa-angle-right"></i>
        </div>
        <div class="precedent">
            <i class="fa-solid fa-angle-left"></i>
        </div>
    </div>
    <script src="slider.js"></script>
        
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
                <p class ="connexion">Vous n'avez pas de compte ? <a href="index.php">Inscrivez-vous ici</a></p>
        </section>
    </div>
    <div class="contenu">
        <div class="information">
            <h2 class= "titre">BOURBON FITNESS</h2>
                <H3 class="sous_titre"> <br>De quoi il s'agit ? </H3>
                <p ><br>Notre plateforme réunie tout les coach de la réunion dans divers spécialitées.
                    <br><br>Vous pouvez visualiser les coachs en fonction de vos attentes, donner une notations sous forme d'étoiles ,écrire un commentaire ainsi que d'échanger gratuitement avec les coachs par le biais de notre tchat.</p>
                <H3 class="sous_titre"> <br> Quel est le but ? </H3>
                <p><br>Le but est de faciliter votre démarche dans la recherche d'un coachs spécialisé ainsi que de mettre en valeur tout les coachs de la Réunion.</p>
        </div>
    </div>
</body>
</html>
