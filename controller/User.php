<?php

require_once 'model/conexion.php';

class User
{
    private $connection;

    public function __construct() {
        $this->connection = new conexion();
    }

    public function obtenerUsuarios() {
        return $this->connection->obtenerDatosPersonas();
    }
}
