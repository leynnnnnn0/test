<?php

require_once '../util.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once '../session_config.php';
    require_once '../class/Database.php';
    require_once '../model/editprofile.model.php';
    require_once '../controller/editprofile.cntrl.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $config = require_once '../config.php';
    $pdo = new Database($config);

    $errors = [];
    if(isEmpty($email, $username, $password)){
        $errors[] = 'Incomplete details';
    }

    if(!validate_email($email)) {
        $errors[] = 'Invalid email';
    }

    if($errors) {
        $_SESSION['errors'] = $errors;
        header('Location:../index.php?editDetails=true');
        die();
    }

    $result = editDetails($pdo, $email, $username, $password);

    if($result) {
        $_SESSION['message'] = 'Details updated';
        $_SESSION['user']['username'] = $username;
        $_SESSION['user']['email'] = $email;
        header('Location:../index.php?editDetails=true');
        die();
    } 
}else {
    header("Location: ../index.php?editDetails=true");
}

