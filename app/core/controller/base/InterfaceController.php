<?php

namespace app\core\controller\base;

use app\libs\request\Request;
use app\libs\response\Response;

interface InterfaceController{

    /**
     * Invoca la vista principal del módulo.
     * @return void
     */
    public function index(): void;

    /**
     * Gestiona los servicios correspondientes, para la búsqueda de una entidad existente
     * en el sistema. Se debe enviar el ID del cliente en la petición.
     * @return void
     */
    public function load($id): void; 

    /**
     * Invoca la vista correspondiente, para el alta de una nueva entidad.
     * @param int id Parametro opcional para permitir clonaciones de registros
     * @return void
     */
    public function create($id): void;

    /**
     * Gestiona los servicios correspondientes, para el alta de una nueva entidad en el sistema.
     * @return void
     */
    public function save(Request $request, Response $response): void;
    
    /**
     * Invoca la vista correspondiente, para poder modificar los datos de una entidad existente en el sistema.
     * @return void
     */
    public function edit($id): void;

    /**
     * Gestiona los servicios correspondientes, para la actualización de datos de una entidad existente en el sistema.
     * @return void
     */
    public function update(): void;

    /**
     * Gestiona los servicios correspondientes, para la eliminación (física) de la entidad.
     * @return void
     */
    public function delete(): void;

}