<?php

require_once 'pdo.php';
require_once 'home.php';
$prod= new product();
if ($_POST['id'] > 0 && is_numeric($_POST['id'])) {
    $prod->delete(['id' => $_POST['id']]);
}

redirectHome();?>