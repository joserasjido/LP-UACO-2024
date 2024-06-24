<?php

namespace app\core\controller;

use app\core\controller\base\Controller;
use app\libs\autentication\Autentication;
use app\libs\request\Request;
use app\libs\response\Response;

final class AutenticacionController extends Controller{

    public function __construct()
    {
        parent::__construct([
            "app/js/autenticacion/autenticacionController.js",
            "app/js/autenticacion/autenticacionService.js"
        ]);
    }

    public function index(): void{
        $this->view = "autenticacion/index.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function login(Request $request, Response $response): void{
        $data = $request->getData();

        Autentication::login($data["usuario"], $data["clave"]);
        $response->setMessage("OK");

        $response->send();
    }

    public function logout(): void{
        session_unset();
        if (ini_get("session.use_cookies")){
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"],
            $params["domain"], $params["secure"], $params["httponly"]);
            }
        session_destroy();

        $this->view = "autenticacion/logout.php";
        require_once APP_TEMPLATE . "template.php";

        header("refresh:5;url=" . APP_URL . "autenticacion/index");
    }
}