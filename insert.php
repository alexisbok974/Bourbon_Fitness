<?php 
include("register.php"); 
$sname = "localhost";
$login = "raphael";
$mdpBD = "raphael";
$bd_name = "Connexion";

// Connexion à la base de données
$conn = mysqli_connect($sname, $login, $mdpBD, $bd_name);

if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

if (isset($_POST['bouton-valider'])) {
    if (!empty($_POST['login']) && !empty($_POST['mdp'])) {
        $pseudoReg = htmlspecialchars($_POST['login']);
        $mdpRegister = sha1($_POST['mdp']); // Notez que sha1 est obsolète pour le hachage sécurisé des mots de passe. Vous devriez utiliser une méthode plus sécurisée comme bcrypt.

        // Préparez et exécutez la requête d'insertion
        $insertion = $conn->prepare('INSERT INTO user (login, mdp) VALUES (?, ?)');
        $insertion->bind_param("ss", $pseudoReg, $mdpRegister);

        if ($insertion->execute()) {
            // La requête d'insertion a réussi
            $recupUser = $conn->prepare('SELECT * FROM user WHERE login = ? AND mdp = ?');
            $recupUser->bind_param("ss", $pseudoReg, $mdpRegister);
            $recupUser->execute();
            $result = $recupUser->get_result();

            if ($result->num_rows > 0) {
                // L'utilisateur est enregistré avec succès
                $row = $result->fetch_assoc();
                $_SESSION['login'] = $row['login'];
                $_SESSION['mdp'] = $row['mdp'];
                $_SESSION['id'] = $row['id'];
                echo $_SESSION['id'];
            } else {
                echo "L'utilisateur n'a pas pu être récupéré.";
            }
        } else {
            echo "L'insertion dans la base de données a échoué.";
        }

        $insertion->close();
        $recupUser->close();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

// N'oubliez pas de fermer la connexion à la base de données lorsque vous avez terminé.
mysqli_close($conn);
?>
