<?php

namespace app\core\controller;

use app\core\controller\base\Controller;
use app\core\controller\base\InterfaceController;
use app\core\service\UsuarioService;

final class UsuarioController extends Controller implements InterfaceController{

    public function __construct()
    {
        parent::__construct([
            "app/js/usuario/usuarioController.js",
            "app/js/usuario/usuarioService.js"
        ]);
    }

    public function index(): void{
        $this->view = "usuario/index.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function load($id): void{
        echo 'CONTROLADOR => LOAD <br>';
    }

    public function create($id): void{
        $this->view = "usuario/alta.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function save(): void{
        $data = json_decode(file_get_contents("php://input"), true);

        $this->response["controlador"] = "usuario";
        $this->response["accion"] = "save";

        try{
            $service = new UsuarioService();
            $service->save($data);
            $this->response["mensaje"] = "La cuenta se registró correctamente";
        }
        catch(\Exception $ex){
            $this->response["error"] = $ex->getMessage();
        }

        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($this->response);
    }
    
    public function edit($id): void{
        $this->view = "usuario/modificar.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function update(): void{
        echo 'CONTROLADOR => UPDATE <br>';
    }

    public function delete(): void{
        echo 'CONTROLADOR => DELETE <br>';
    }

}