<?php


function edit_user_details(object $pdo, string $email, string $username, string $password) {
    try {
        $query = "UPDATE users SET email = :email, username = :username, pass = :pass WHERE email = :email";
        $stmt = $pdo->connection->prepare($query);

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":pass", $hashedPassword, PDO::PARAM_STR); 
        return $stmt->execute();
    }catch(PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}