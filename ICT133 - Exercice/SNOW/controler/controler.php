<?php
session_start();


require "model/model.php";

function home()
{
    $_GET["action"]="home";
    require "view/home.php";
}

function login($log)
{
    $_GET["action"] = "login";

    if (checkLogin($log))
    {
        require "view/resultLogin.php";
    }
    else {
        require "view/login.php";
        require "view/resultLogin.php";
    }
}

function logout()
{
    $_GET['action'] = "login";
    $_SESSION['login'] = "";
    session_unset();
    session_destroy();
    require "View/login.php";
}

function register()
{
    require "view/register.php";
}


