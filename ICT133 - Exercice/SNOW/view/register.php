<?php
ob_start();
?>

    <hr>
    <title>Rent A Snow - Register</title>
    <h1 style="color: #db6400">Register</h1>


    <form action="index.php?action=register" method="post">

        <div >
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" minlength="4" required>

            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Username" name="uname" minlength="4" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" minlength="5" required>

            <label for="psw"><b>Repeat Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw2" minlength="5" required>

            <br><button type="submit" >Valider</button> <a href="index.php?action=login">Annuler </a>
        </div>

    </form>


<?php
$content = ob_get_clean();
require "gabarit.php";