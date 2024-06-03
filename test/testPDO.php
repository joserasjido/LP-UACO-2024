<?php

require_once "../app/vendor/autoload.php";

use app\libs\connection\Connection;
use app\core\model\dao\UsuarioDAO;
use app\core\model\dto\UsuarioDTO;

try{
    $conexion = Connection::get();
    echo "Conexion establecida";

    $data = [
        "apellido" => "Rasjido",
        "nombres" => "Jose",
        "cuenta" => "jrasjido"
    ];

    $usuario = new UsuarioDTO($data);
    $dao = new UsuarioDAO($conexion);
    $dao->save($usuario);
}
catch(PDOException $ex){
    echo '<p>Error de conexión ' . $ex->getMessage() . '</p>';
}