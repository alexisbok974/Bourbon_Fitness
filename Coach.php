<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Coachs</title>
    <link rel="stylesheet" href="style/StyleCoach.css">
</head>

<!-- Barre de navigation -->
<div class="navbar">
    <a href="BourbonFitness.php">Accueil</a>
    <a href="Coach.php">Trouver Coach</a>
    <a href="a-propos.html">À Propos</a>
    <a href="login.php">Mon Compte</a>
</div>

<body>

    
    <div class="tableau">
        <h1>Liste des Coachs</h1>
        <table class="styleTab">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Spécialité</th>
                <th>Informations</th>
            </tr>
            <?php
            // Configuration de la connexion à la base de données
            $serveur = "localhost";
            $utilisateur = "Bfitness";
            $motDePasse = "Fitness25jo";
            $baseDeDonnees = "BourbonFitness";

            // Connexion à la base de données
            $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

            // Vérification de la connexion
            if ($connexion->connect_error) {
                die("Échec de la connexion à la base de données : " . $connexion->connect_error);
            }

            // Requête SQL pour récupérer les utilisateurs
            $requete = "SELECT idCoach, nomCoach, prenomCoach, sexeCoach, specialite, emailCoach, telephoneCoach FROM Coach";
            $resultat = $connexion->query($requete);

            // Affichage des utilisateurs dans le tableau HTML
            if ($resultat->num_rows > 0) {
                while ($row = $resultat->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["idCoach"] . "</td>";
                    echo "<td>" . $row["nomCoach"] . "</td>";
                    echo "<td>" . $row["prenomCoach"] . "</td>";
                    echo "<td>" . $row["sexeCoach"] . "</td>";
                    echo "<td>" . $row["specialite"] . "</td>";
                    echo '<td><a href="DetailsCoach.php?idCoach=' . $row["idCoach"] . '">Voir les détails</a></td>';
                    echo "</tr>";
                }
            } else {
                echo "Aucun utilisateur trouvé.";
            }

            // Fermeture de la connexion à la base de données
            $connexion->close();
            ?>
        </table>
    </div>
</body>
</html>
