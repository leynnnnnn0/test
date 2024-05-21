<?php

declare(strict_types=1);

function isEmpty(string $email, string $username, string $password) {
    return empty($email) || empty($username) || empty($password);
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function editDetails(object $pdo, string $email, string $username, string $password) {
    return edit_user_details($pdo ,$email, $username, $password);
}