<?php

class Conexion
{

    private $conexion = null;
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'farmadso';




    public function __construct()
    {
        $this->conexion = mysqli_connect("$this->server", "$this->user", "$this->password", "$this->database");
    }
    public function getConexion()
    {
        return $this->conexion;
    }

}
$bd = new Conexion();
$conexion = $bd->getConexion();  //Conexion database
?>