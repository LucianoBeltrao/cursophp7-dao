<?php


class Sql extends PDO{

    private $conn;


    public function __contruct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
        
    }

    public function quert ($rawQuery, $params = array()){

        $stmt = $this->conn->prepare($RawQuery);

        foreach ($params as $key => $value) {

            $stmt->bindParam($key, $value);

        }


    }


}





?>