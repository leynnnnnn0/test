<?php

require_once '../util.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once '../class/Database.php';
    require_once '../model/signup.model.php';
    require_once '../controller/signup.cntrl.php';

    $config = require_once '../config.php';
    $pdo = new Database($config);
    $errors = [];
    
    if(is_incomplete_details($firstname, $lastname, $email, $password)) {
        $errors["incomplete_details"] = "Incomplete details";
    }

    if(!is_email_valid($email)) {
        $errors["invalid_email"] = "Invalid email";
    }

    if(isset(is_email_registered($pdo, $email)['id'])) {
        $errors["used_email"] =  "Email already registered";
    }

    if($errors) {
        $_SESSION['errors'] = $errors;
        header("Location: ../index.php");
        die();
    }
    
    if(add_new_user($pdo, $firstname, $email, $password)) {
        echo "User registered";
    }else {
        echo "Internal server error";
    }
}