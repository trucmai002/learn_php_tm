<?php
$DB_TYPE = 'mysql';
$DB_HOST = 'localhost';
$DB_NAME = 'crud_test';
$USER = 'root';
$PW = '';

try {
    $connection = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER, $PW);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

function prepareSQL($sql) {
    global $connection;
    return $connection->prepare($sql);
}

function all() {
    $sql = "SELECT * FROM product";
    $stmt = prepareSQL($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

function create($data) {
    $sql = "INSERT INTO product (name) VALUES (:name)";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}

function delete($data) {
    $sql = "DELETE FROM product where id = :id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}

function update($data) {
    $sql = "UPDATE product SET name = :name WHERE id = :id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
}

function findById($data) {
    $sql = "SELECT * FROM product WHERE id = :id";
    $stmt = prepareSQL($sql);
    $stmt->execute($data);
    return $stmt -> fetch();
}