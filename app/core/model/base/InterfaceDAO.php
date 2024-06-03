<?php

namespace app\core\model\base;

use app\core\model\dto\UsuarioDTO;

interface InterfaceDAO{

    public function save(UsuarioDTO $object): void;

    public function load($id): UsuarioDTO;

    public function update($object): void;

    public function delete($id): void;

}