<?php
class Conexion{
    private $host;
    private $password;
    private $username;
    private $port;
    private $server;
    private $connection;
    private $db;
    public function __construct(){
        $this ->server = $_SERVER['HTTP_HOST'];
        $this ->connection = null;
        $this -> db = 'Backend_db';
        $this ->port = 3306;
        $this ->host = 'localhost';
        
        if ($this ->server == 'localhost') {
            $this ->username = 'p_Backend_V1';
            $this ->password = 'lmnopq';
        }
    }

    public function __destruct(){
        $this -> connection = mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);

}
}