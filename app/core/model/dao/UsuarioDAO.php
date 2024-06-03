<?php

namespace app\core\model\dao;

use app\core\model\base\InterfaceDAO;
use app\core\model\base\DAO;
use app\core\model\dto\UsuarioDTO;

final class UsuarioDAO extends DAO implements InterfaceDAO{

    public function __construct($conn)
    {
        parent::__construct($conn);
    }

    public function save(UsuarioDTO $object): void{
        $sql = "INSERT INTO usuarios VALUES (DEFAULT, :apellido, :nombres, :cuenta, '12345', 'jose@gmail.com', 1, 1, '', '', NOW(), 0)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($object->toArray());
    }

    public function load($id): UsuarioDTO{
        return new UsuarioDTO();
    }

    public function update($object): void{

    }

    public function delete($id): void{

    }
}