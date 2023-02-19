<?php

namespace Connection;

class Database {
    
    private $address = "localhost";
    private $db_name = "yakubranti";
    private $user = "root";
    private $pass = "root";

    public $connect;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->address . ';dbname=' . $this->db_name;

        $this->connect = new \PDO($dsn, $this->user, $this->pass); 
    }

    public function connection()
    {
        return $this->connect;
    }
    
}

?>