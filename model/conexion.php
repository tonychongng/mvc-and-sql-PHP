<?php

class conexion
{
    private $conexion;

    public function __construct(
        private string $server = 'localhost',
        private string $user = 'root',
        private string $password = 'm123123123',
        private string $db = 'practica'
    )
    {
        $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->db);

        if ($this->conexion->connect_error){
            die('Conexión fallida' . $this->conexion->connect_error);
        }else {
            return $this->conexion;
            echo 'Conexión realizada';
        }
    }

    public function obtenerDatosPersonas(): array
    {
        $resultados = [];
        $query = "SELECT nombre, apellido, pais FROM personas";
        $resultadoConsulta = $this->conexion->query($query);

        if ($resultadoConsulta) {
            while ($fila = $resultadoConsulta->fetch_assoc()) {
                $resultados[] = $fila;
            }
        } else {
            echo "Error al obtener datos: " . $this->conexion->error;
        }

        return $resultados;
    }
}