<?php

namespace app\libs\connection;

final class Connection{

    public static function get(){
        $user = "root";
        $pass = "";
        return new \PDO('mysql:host=localhost;dbname=lp_practica_2024', $user, $pass);
    }

}