<?php
ob_start();
?>

    <hr>
    <title>Rent A Snow - Login</title>

<?php
    if (isset($_SESSION['Username'])) :
    echo "Bienvenue ", @$_POST['uname'], " !";
    endif ?>


    <br><a href="index.php?action=home">Revenir à l'accueil du site !</a>

<?php
$content = ob_get_clean();
require "gabarit.php";