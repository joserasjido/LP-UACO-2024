<?php

namespace app\core\controller;

use app\core\controller\base\Controller;
use app\core\controller\base\InterfaceController;
use app\core\service\UsuarioService;
use app\libs\request\Request;
use app\libs\response\Response;

final class UsuarioController extends Controller implements InterfaceController{

    public function __construct()
    {
        parent::__construct([
            "app/js/usuario/usuarioController.js",
            "app/js/usuario/usuarioService.js"
        ]);
    }

    public function index(): void{
        $service = new UsuarioService();
        $data = $service->list();
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

    public function save(Request $request, Response $response): void{
        $service = new UsuarioService();
        $service->save($request->getData());
        $response->setMessage("La cuenta se registró correctamente");
        $response->send();
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