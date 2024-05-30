<?php

require_once "../app/libs/connection/Connection.php";

use app\libs\connection\Connection;

try{
    $conexion = Connection::get();
    echo '<p>Conexión establecida</p>';
    $sql = "INSERT INTO perfiles VALUES (DEFAULT, 'Administrador'), (DEFAULT, 'Operador')";
    $result = $conexion->exec($sql);
    if(!$result){
        echo '<p>Error al intentar insertar registros</p>';
    }
    else{
        echo '<p>Filas afectadas: ' . $result . '</p>';
    }
}
catch(PDOException $ex){
    echo '<p>Error de conexión ' . $ex->getMessage() . '</p>';
}