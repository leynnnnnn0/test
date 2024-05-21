<?php


declare(strict_types=1);
function check_input(string $email, string $password) {
    return empty($email) || empty($password);
}

function user_exist(object $pdo, string $email) {
    return validate_email($pdo, $email);
}

function validate_user(string $password, string $hashedPassword) {
    return password_verify($password, $hashedPassword);  
}
