
<?php
$sname = "localhost";
$login ="raphael";
$mdpBD ="raphael";

$bd_name ="Connexion";
$conn =mysqli_connect($sname,$login,$mdpBD,$bd_name);
if (!$conn){
    echo("connexion echoué !");
}
?>