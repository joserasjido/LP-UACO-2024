<?php

require_once "../app/config/DBConfig.php";
require_once "../app/vendor/autoload.php";

use app\libs\connection\Connection;
use app\libs\autentication\Autentication;

try{
    Autentication::login("danielperez3", "daniel123");
}
catch(Exception $ex){
    echo $ex->getMessage();
}