<?php

require_once "../app/config/DBConfig.php";
require_once "../app/vendor/autoload.php";

use app\libs\connection\Connection;
use app\core\model\dao\ProvinciaDAO;
use app\core\model\dto\ProvinciaDTO;

try{
    $conexion = Connection::get();
    echo "Conexion establecida<br>";

    
     $data1 = [
        "id" => 0,
        "nombre" => "Chacos"
    ];
    $data2 = [
        "id" => 0,
        "nombre" => "Santa Fes"
    ];

    //$provincia = new ProvinciaDTO($data);
    $dao = new ProvinciaDAO($conexion);

    //guardar
    try{
        $provincia1 = new ProvinciaDTO($data1);
        $dao->save($provincia1);
        $dao->save(new ProvinciaDTO($data2));
        print_r("ID => " . $provincia1->getId());

        $provincia1->setNombre("Provincia chaco");
        $dao->update($provincia1);

    }
    catch(Exception $ex){
        print_r($ex->getMessage());
    }

    //cargar load
    /* $provincia = $dao->load(1);
    print_r($provincia->toArray()); */

    //Actualizar
    /* $provincia->setNombre("Chubut");
    $dao->update($provincia); */

    //borrar
    /* $dao->delete(1);
    $dao->delete(2); */

}
catch(PDOException $ex){
    echo '<p>Error de conexión ' . $ex->getMessage() . '</p>';
}