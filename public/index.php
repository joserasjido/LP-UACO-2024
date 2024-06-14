<?php

    require_once "../app/config/AppConfig.php";
    require_once "../app/config/DBConfig.php";
    require_once "../app/vendor/autoload.php";



    use app\core\controller\UsuarioController;
    use app\libs\autentication\Autentication;
    use app\core\controller\AutenticacionController;

    $controller;

    session_start();

    if(isset($_SESSION["token"]) && $_SESSION["token"] == APP_TOKEN){
        $controller = $_GET["controller"];
    }
    else{
        $controller = "autenticacion";
    }
    

    
    /* switch(session_status()){
        case PHP_SESSION_ACTIVE: echo 'Session habilitada y existe una'; break;
        case PHP_SESSION_DISABLED: echo 'Session deshabilitadas'; break;
        case PHP_SESSION_NONE: echo 'Session habilitada pero no existe una'; break;
        default: break;
    } */

    switch($controller){
        case "usuario":
            $controller = new UsuarioController();
            usuarios($controller);
            break;
        case "cliente":
            //$controller = new ClienteController();
            break;
        case "autenticacion":
            //Autentication::login("danielperez", "daniel123");
            $controller = new AutenticacionController();
            autenticacion($controller);
            break;
        default: break;
    }

    function autenticacion($controller): void{
        switch($_GET["action"]){
            case "login":
                $controller->login();
                break;
            case "logout":
                $controller->logout();
                break;
            default:
                $controller->index();
                break;
        }
    }

    function usuarios($controller): void{
        switch($_GET["action"]){
            case "index":
                $controller->index();
                break;
            case "load":
                $controller->load();
                break;
            case "create":
                $controller->create($_GET["id"]);
                break;
            case "save":
                $controller->save();
                break;
            case "edit":
                $controller->edit($_GET["id"]);
                break;
            case "update":
                $controller->update();
                break;
            case "delete":
                $controller->delete();
                break;
            default: break;
        }
    }

