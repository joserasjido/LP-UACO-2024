<?php

namespace app\core\controller;

use app\core\controller\base\InterfaceController;

final class UsuarioController implements InterfaceController{

    public function index(): void{
        $view = "usuario/index.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function load($id): void{
        echo 'CONTROLADOR => LOAD <br>';
    }

    public function create($id): void{
        $view = "usuario/alta.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function save(): void{
        echo 'CONTROLADOR => SAVE <br>';
    }
    
    public function edit($id): void{
        $view = "usuario/modificar.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function update(): void{
        echo 'CONTROLADOR => UPDATE <br>';
    }

    public function delete(): void{
        echo 'CONTROLADOR => DELETE <br>';
    }

}