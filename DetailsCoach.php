<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Coach</title>
    <link rel="stylesheet" href="StyleCoach.css">
</head>

<!-- Barre de navigation -->
<div class="navbar">
    <a href="BourbonFitness.html">Accueil</a>
    <a href="Coach.php">Trouver Coach</a>
    <a href="a-propos.html">À Propos</a>
    <a href="login.php">Mon Compte</a>
</div>

<body>
    <div class="divDetailsCoach">
        <h1>Détails du Coach</h1>

        <?php
        // Vérifier si l'ID de l'utilisateur est présent dans l'URL
        if (isset($_GET['idCoach'])) {
            // Récupérer l'ID de l'URL
            $idCoach = $_GET['idCoach'];

            // ... Code de connexion à la base de données ...
            $serveur = "localhost";
            $utilisateur = "root";
            $motDePasse = "root";
            $baseDeDonnees = "BourbonFitness";

            $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
            
            if ($connexion->connect_error) {
                die("Échec de la connexion à la base de données : " . $connexion->connect_error);
            }

            // Requête SQL pour récupérer les détails de l'utilisateur par ID
            $requete = "SELECT idCoach, nomCoach, prenomCoach, sexeCoach, specialite, emailCoach, telephoneCoach FROM Coach WHERE idCoach = $idCoach";
            $resultat = $connexion->query($requete);

            // Vérifier si l'utilisateur existe
            if ($resultat->num_rows == 1) {
                $utilisateur = $resultat->fetch_assoc();
                echo "<p><strong>ID :</strong> " .          $utilisateur["idCoach"]         . "</p>";
                echo "<p><strong>Nom :</strong> " .         $utilisateur["nomCoach"]        . "</p>";
                echo "<p><strong>Prenom :</strong> " .      $utilisateur["prenomCoach"]     . "</p>";
                echo "<p><strong>Sexe :</strong> " .        $utilisateur["sexeCoach"]       . "</p>";
                echo "<p><strong>Specialite :</strong> " .  $utilisateur["specialite"]      . "</p>";
                echo "<p><strong>Email :</strong> " .       $utilisateur["emailCoach"]      . "</p>";
                echo "<p><strong>Telephone :</strong> " .   $utilisateur["telephoneCoach"]  . "</p>";
            } else {
                echo "Utilisateur non trouvé.";
            }

            // ... Fermeture de la connexion à la base de données ...
            $connexion->close();
        } else {
            echo "ID du Coach non spécifié dans l'URL.";
        }
        ?>

        <p><a href="Coach.php">Retour à la liste des Coachs</a></p>
    </div>
</body>
    
</html>
