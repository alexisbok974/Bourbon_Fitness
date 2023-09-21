<!DOCTYPE html>
<html>
<head>
    <title>Détails du Coach</title>
</head>

<body>
    <h1>Détails du Coach</h1>

    <?php
    // Vérifier si l'ID de l'utilisateur est présent dans l'URL
    if (isset($_GET['idCoach'])) {
        // Récupérer l'ID de l'URL
        $idCoach = $_GET['idCoach'];

        // ... Code de connexion à la base de données ...
        $serveur = "localhost";
        $utilisateur = "btssio";
        $motDePasse = "btssio";
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

    <p><a href="Coach.php">Retour à la liste des Coach</a></p>
</body>
</html>
