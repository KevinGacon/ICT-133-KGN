<?php

require "controler/controler.php";

    if(isset($_GET["action"])){
        $action = $_GET["action"];
        switch ($action) {
            case "home" :
                home();
                break;
            case "login" :
                login($_POST);
                break;
            case "logout" :
                logout();
                break;
            case "register" :
                register();
                break;
            case "product" :
                product();
                break;
            default :
                home();
        }
    }
    else{
        home();
    }

