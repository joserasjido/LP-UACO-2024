<?php

namespace app\core\model\dao;

use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;
use app\core\model\base\DAO;
use app\core\model\dto\UsuarioDTO;

final class UsuarioDAO extends DAO implements InterfaceDAO{

    public function __construct($conn)
    {
        parent::__construct($conn, "usuarios");
    }

    public function save(InterfaceDTO $object): void{
        $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :apellido, :nombres, :cuenta, :clave, :correo, :perfilId, 1, :horaEntrada, :horaSalida, NOW(), 0)";
        $stmt = $this->conn->prepare($sql);
        $data = $object->toArray();
        unset($data["id"]);
        unset($data["estado"]);
        unset($data["resetear"]);
        unset($data["fechaAlta"]);
        $clave = password_hash($object->getClave(), PASSWORD_DEFAULT);
        $data["clave"] = $clave;
        $stmt->execute($data);
    }

    public function load($id): UsuarioDTO{
        return new UsuarioDTO();
    }

    public function update(InterfaceDTO $object): void{

    }

    public function delete($id): void{

    }

    public function list(): array{

        $sql = "SELECT cuenta, perfilId, estado FROM {$this->table}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_NUM);
    }
}