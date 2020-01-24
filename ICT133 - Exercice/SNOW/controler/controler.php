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
        require "view/login.php";
    }
    else {
        require "view/login.php";
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

function product()
{
    $_GET['action'] = "product";

    $produit_content = dataBaseShop();
    $_GET['prContent'] =$produit_content;
    require "View/product.php";
}

