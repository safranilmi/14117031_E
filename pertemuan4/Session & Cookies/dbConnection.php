<?php 

class dbConnection {
    private $host   = 'localhost';
    private $username   = 'root';
    private $password   = '';
    private $database   = 'mahasiswa';
    protected $connection;

    public function __construct(){
        if(!isset($this->connection)){
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if(!$this->connection){
                echo "Connection database failed";
                exit;
            }
        }

        return $this->connection;
    }
}

 ?>