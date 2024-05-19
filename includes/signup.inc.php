<?php

require_once '../util.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once '../class/Database.php';
    // require_once '../model/login.model.php;
    require_once '../controller/signup.cntrl.php';

    $errors = [];

    if(is_incomplete_details($firstname, $lastname, $email, $password)) {
        $errors["incomplete_details"] = "Incomplete details";
        die();
    }

    if(!is_email_valid($email)) {
        $errors["invalid_email"] = "Invalid email";
    }

    
    echo $firstname;
    echo $lastname;
    echo $email;
    echo $password;
}