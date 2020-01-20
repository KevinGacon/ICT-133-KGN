<?php
ob_start();
?>

    <hr>
    <title>Rent A Snow - Login</title>
    <h1 style="color: #db6400">Login</h1>


    <form action="index.php?action=login" method="post">

        <div >
            <label for="uname"><b>Username / Email</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <br><button type="submit" >Login</button> <a href="index.php?action=register">Register </a>
        </div>
    </form>

<?php
$content = ob_get_clean();
require "gabarit.php";