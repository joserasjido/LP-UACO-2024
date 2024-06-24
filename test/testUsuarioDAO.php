<?php

use app\core\model\dao\UsuarioDAO;
use app\core\model\dto\UsuarioDTO;
use app\libs\connection\Connection;

require_once "../app/config/AppConfig.php";
require_once "../app/config/DBConfig.php";
require_once "../app/vendor/autoload.php";

$user = new UsuarioDTO([
    "apellido"  => "Rasjido",
    "nombres"   => "Jose Alberto",
    "cuenta"    => "joserasjido",
    "correo"    => "jrasjido@gmail.com",
    "clave"     => "joserasjido",
    "perfilId"  => 1,
    "horaEntrada"   => "",
    "horaSalida"   => ""
]);

$conn = Connection::get();

$dao = new UsuarioDAO($conn);

$dao->save($user);