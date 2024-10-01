<?php
    class DbConnect{
        private $host = 'localhost';
        private $dbName = 'library';
        private $username = 'root';
        private $password = '';

        public function connect(){
            try{
                $conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                return $conn;
            }
            catch(PDOException $e){
                echo "Connection failed: ". $e->getMessage();
            }
        }
    }

    $db = new DbConnect();
    $db->connect();
?>