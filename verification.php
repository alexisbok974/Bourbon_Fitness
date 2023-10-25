<?php
include("db_connexion.php");
include("ok.php");

if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $login = htmlspecialchars($_POST['login']);
    $mdp = $_POST['mdp'];

    if (empty($login) || empty($mdp)) {
        header("location: login.php?error=Identifiant ou mot de passe manquant");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE login = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $mdpHash = $row['mdp'];

            if (password_verify($mdp, $mdpHash)) {
                session_start();
                $_SESSION['conn'] = "OK";
                header("location: BourbonFitness.php");
                exit();
            } else {
                header("location: login.php?error=Identifiant ou mot de passe incorrect");
                exit();
            }
        } else {
            header("location: login.php?error=Identifiant ou mot de passe incorrect");
            exit();
        }
    }
} else {
    header("location: login.php");
    exit();
}
?>
