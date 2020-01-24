<?php
ob_start();
?>

    <hr>
    <title>Rent A Snow - Login</title>

<?php
    echo "Bienvenue ", @$_POST['uname'], " !";
?>


    <br><a href="index.php?action=home">Revenir à l'accueil du site !</a>

<?php
$content = ob_get_clean();
require "gabarit.php";