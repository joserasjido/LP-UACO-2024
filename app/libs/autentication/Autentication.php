<?php

namespace app\libs\autentication;

use app\libs\connection\Connection;

final class Autentication{

    public static function login($user, $pass): void{
        //validar formato del usuario y contraseña
        $conn = Connection::get();
        $sql = "SELECT CONCAT(nombres,', ',apellido) AS usuario, cuenta, clave, perfilId, estado, horaEntrada, horaSalida, resetear FROM usuarios WHERE cuenta = :cuenta";
        $stmt = $conn->prepare($sql);
        if(!$stmt->execute(["cuenta" => $user])){
            throw new \Exception("No se pudo <i>ejecutar</i> la consulta");
        }
        if($stmt->rowCount() !== 1){
            throw new \Exception("El usuario o la clave es inválido");
        }
        $cuenta = $stmt->fetch();

        if(!password_verify($pass, $cuenta->clave)){
            throw new \Exception("El usuario o la clave es inválido");
        }
        if($cuenta->estado !== 1){
            throw new \Exception("Su cuenta esta inactiva");
        }
        if($cuenta->resetear !== 0){
            throw new \Exception("Su clave ha caducado");
        }

        //paso las validaciones, la cuenta es valida
        //se crean las variables de sessión
        $_SESSION["token"] = APP_TOKEN;
        $_SESSION["usuario"] = $cuenta->usuario;
        $_SESSION["perfilId"] = $cuenta->perfilId;

    }

    public static function logout(): void{

    }

}