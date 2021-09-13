<?php

class Dbh{

    private $host = "localhost";    
    private $user = "id17573152_definetelyuniqueusername";         
    private $pwd = "9f{N]6!sI[BBgP<m";              
    private $dbName = "id17573152_swproductdb";

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName ;
        $pdo = new PDO($dsn,$this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}