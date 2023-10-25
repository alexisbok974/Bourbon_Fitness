<?php
    //$chemin = "C:/wamp64/www/Projet/Inscription/Inscription/";
    include("db_connexion.php");
    
    
    if (isset($_POST['bouton-valider'])) {
        if (!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
            $login = htmlspecialchars($_POST['login']);
            $email = htmlspecialchars($_POST['email']);
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        }
    


        function verif_MDP($mdp, $cfr, $min, $maj, $sym)
        {
            if ($cfr && $min && $maj && $sym) {
                return true;
            } else {
                return false;
            }
        }

        if (!empty($_POST['mdp']) && isset($_POST['bouton-valider'])) {
            $mdp = $_POST['mdp'];
            $cfr = preg_match('/[0-9]/', $mdp);
            $min = preg_match('/[a-z]/', $mdp);
            $maj = preg_match('/[A-Z]/', $mdp);
            $sym = preg_match('/[#?!@$%^&*-]/', $mdp);
            $erreur = array();

            if (!$cfr) {
                header("location: index.php?error=Le mot de passe au moin un chiffre !");
            }
            if (!$min) {
                header("location: index.php?error=Le mot de passe doit contenir au moins une minuscule !");
            }
            if (!$maj ) {
                header("location: index.php?error=Le mot de passe doit contenir au moins une majuscule");
            }
            if (!$sym) {
                header("location: index.php?error=Le mot de passe doit contenir au moins un caractère spéciale");
            }

            else{
                $mdp = password_hash($mdp, PASSWORD_DEFAULT);
                if (verif_MDP($mdp, $cfr, $min, $maj, $sym)) {
                    $testmail = $conn->prepare("SELECT * FROM user WHERE email = ?;");
                    $testmail->bind_param("s", $email);
                    $testmail->execute();

                    $result = $testmail->get_result();
                    $controlmail = $result->num_rows;

                    if ($controlmail == 0) {
                        $insertion = $conn->prepare("INSERT INTO user(login, mdp, email) VALUES (?, ?, ?);");
                        $insertion->bind_param("sss", $login, $mdp, $email);
                        $insertion->execute();

                        session_start();
                        $_SESSION['conn'] = "OK";
                        header("location: BourbonFitness.php");
                        exit();
                    } else {
                        echo 'Le mot de passe choisi ne répond pas aux critères';
                    }
                }   
            }
        }else {
            header("location: index.php?error=Veuillez remplir tous les champs.");
        }
    }else{

    }
        
    
    ?>
</div>
</body>
</html>
