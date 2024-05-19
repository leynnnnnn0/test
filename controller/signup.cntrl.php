<?php

declare(strict_types=1);

function is_incomplete_details(string $firstname, string $lastname, string $email, string $password) 
{
    return empty($firstname) || empty($lastname) || empty($email) || empty($password);
}

function is_email_valid(string $email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
    
