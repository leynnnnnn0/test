<?php

require '../util.php';
require '../session_config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    require_once '../class/Database.php';
    require_once '../model/login.model.php';
    require_once '../controller/login.cntrl.php';

    $config = require_once '../config.php';

    $pdo = new Database($config);
    $errors = [];

    if(check_input($email,$password)) {
        $errors[] = 'Incomplete details';
    }else {
        if(user_exist($pdo, $email)) {
            $currentUser = validate_email($pdo, $email);
            if(validate_user($password, $currentUser['pass'])) {
                $_SESSION['message'] = "successfully logged in"; 
                $_SESSION['user'] = $currentUser;
                $newSessionId = session_create_id() . '_' .$_SESSION['user']['id'];
                session_id($newSessionId);
                $_SESSION['last_regeneration'] = time();
                header('Location:../index.php?message=success');
                die();
            }else {
                $errors[] = "Incorrect password";
                $_SESSION['error'] = "Incorrect password";
            }
        }else {
            $errors[] = "User does not exist"; 
        }
    }
    $_SESSION['errors'] = $errors;
    header('Location: ../index.php');
    die();
}

