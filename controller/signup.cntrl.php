<?php

declare(strict_types=1);

function is_incomplete_details(string $firstname, string $lastname, string $email, string $password) 
{
    return empty($firstname) || empty($lastname) || empty($email) || empty($password);
}

function is_email_valid(string $email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
    
function is_email_registered(object $pdo, string $email) {
    return is_email_already_used($pdo, $email);
}

function add_new_user(object $pdo, string $firstname, string $email, string $password) {
    return add_user($pdo, $firstname, $email, $password);
}