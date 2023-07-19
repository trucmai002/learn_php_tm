<?php

require_once 'pdo.php';
require_once 'home.php';
$cate= new Category();
if ($_POST['id'] > 0 && is_numeric($_POST['id'])) {
    $cate->delete(['id' => $_POST['id']]);
}

redirectHome();?>