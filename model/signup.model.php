<?php

function is_email_already_used(object $pdo, string $email)
{
    try {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->connection->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function add_user(object $pdo, $firstname, $email, $password) {
    try {
        $query = "INSERT INTO users (username, email, pass) VALUES (:username, :email, :pass);";
        $stmt = $pdo->connection->prepare($query);
        $stmt->bindParam(":username", $firstname, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);

        $hashedPass = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(":pass", $hashedPass, PDO::PARAM_STR);
        $result = $stmt->execute();
        return $result;
    }catch(PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}