<?php

function validate_email(object $pdo, $email) {
    try {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->connection->prepare($query);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }catch(PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}


