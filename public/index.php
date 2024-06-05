<?php

    require_once "../app/config/AppConfig.php";
    require_once "../app/config/DBConfig.php";
    require_once "../app/vendor/autoload.php";



    use app\core\controller\UsuarioController;
    $controller;

    switch($_GET["controller"]){
        case "usuario":
            $controller = new UsuarioController();
            usuarios($controller);
            break;
        case "cliente":
            //$controller = new ClienteController();
            break;
        default: break;
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

