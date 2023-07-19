<?php
require_once 'pdo.php';
require_once 'home.php';

$cate= new Category();

$request = $_POST;

$data = [
    'name' => $request['name'],
];

$cate->create($data);
redirectHome();
?>