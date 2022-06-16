<?php


class Conexion {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "login";
    public $con;
    
    public function conectar() {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function desconectar() {
        mysqli_close($this->con);
    }
}
