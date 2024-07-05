<?php

declare(strict_types=1);
function add_post(object $pdo, string $body, string $id) {
    try {
        $query = "INSERT INTO posts (content, user_id) VALUES (:content, :user_id)";
        $stmt = $pdo->connection->prepare($query);
        $stmt->bindParam(":content", $body, PDO::PARAM_STR);
        $stmt->bindParam(":user_id", $id, PDO::PARAM_STR);
        return $stmt->execute();
    }catch(PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}

function fetchPosts(object $pdo, $id) {
    try {
        $query = "SELECT * FROM posts WHERE user_id = :id";
        $stmt = $pdo->connection->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }catch(PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
}