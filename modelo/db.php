<?php
    class Database {
        private $host = 'localhost';
        private $db_name='automovil';
        private $username= 'root';
        private $password = '';
        protected $conn;
    

    public function getConection(){
        $this -> conn = null;
        try{
            $this-> conn = new PDO("mysql:host=". $this->host. ";dbname=". $this->db_name, $this->username,$this->password);
            $this-> conn -> exec("set name utf8");
        }catch(PDOException $exception){
           
        }

        return $this->conn;
    }
}

?>