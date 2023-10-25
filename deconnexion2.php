<?php

include ("login.php");
session_start();
// Détruction de la session
session_destroy();

header("Location:login.php");
exit();
?>
