<?php

namespace app\core\model\base;

class DAO{

    protected $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

}