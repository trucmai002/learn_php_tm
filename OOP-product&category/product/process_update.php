<?php
        require_once 'pdo.php';
        require_once 'home.php';
        $prod= new product();
        $data = [
            'name' => $_POST['name'],
            'id' => $_GET['id']
        ];
        $prod->update($data);
        redirectHome();
    ?>