<?php

require_once "../app/core/model/dto/UsuarioDTO.php";

use app\core\model\dto\UsuarioDTO as User;

$data = [
    "id" => "Caleta",
    "apellido" => "Rasjido",
    "nombres" => "Jose",
    "cuenta" => "jrasjido"
];

$usuario = new User($data);

print_r($usuario->toArray());