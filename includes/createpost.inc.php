<?php

require '../session_config.php';
require_once '../util.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../class/Database.php';
    require_once '../model/createpost.model.php';
    require_once '../controller/createpost.cntrl.php';
    $config = require_once '../config.php';
    $pdo = new Database($config);
    $id = '5';
    $body = $_POST['body'];
    $errors = [];

    unset($_SESSION['posts']);
    $_SESSION['posts']= fetchPosts($pdo, $id);

    if (isEmpty($body)) {
        $errors[] = 'body is empty';
    }

    if($errors) {
        $_SESSION['errors'] = $errors;
        header('Location:../index.php?message=success');
        die();
    }

    if(create_post($pdo, $body, $id)) {
        $_SESSION['message'] = "posted successfully";
        header('Location:../index.php?message=success');
        die();
    }
    
}