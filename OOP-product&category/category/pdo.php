<?php

abstract class Connection{
    protected $connection, $host, $dbname, $username, $password;
    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'product';
        $this->username = 'root';
        $this->password = '';
        $this->connection = $this->connect();
    }
    public function connect(){
        try {
            $connection = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $connection;
        } catch (Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    public function prepareSQL($sql){
        return $this->connection->prepare($sql);
    }
}
class Category extends Connection{
    function all() {
        $sql = "SELECT * FROM category";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    function create($data) {
        $sql = "INSERT INTO category (name) VALUES (:name)";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    } 
    function delete($data) {
        $sql = "DELETE FROM category where id = :id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }
    
    function update($data) {
        $sql = "UPDATE category SET name = :name WHERE id = :id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
    }
    function findById($data) {
        $sql = "SELECT * FROM category WHERE id = :id";
        $stmt = $this->prepareSQL($sql);
        $stmt->execute($data);
        return $stmt -> fetch();
    }
}
