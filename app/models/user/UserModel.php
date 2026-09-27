<?php

require_once __DIR__ . "/../Model.php";

class userModel extends Model
{
    public function getUSers(){
        
        $stmt = $this->DB->query("SELECT * FROM customers;");

        $result = $stmt->fetchAll();

        return $result;
    }
}