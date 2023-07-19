<?php
        require_once 'pdo.php';
        require_once 'home.php';
        $cate= new Category();
        $data = [
            'name' => $_POST['name'],
            'id' => $_GET['id']
        ];
        $cate->update($data);
        redirectHome();
    ?>