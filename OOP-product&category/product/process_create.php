<?php
require_once 'pdo.php';
require_once 'home.php';

$prod= new Product();


$request = $_POST;

$data = [
    'name' => $request['name'],
];

$prod->create($data);
redirectHome();
?>