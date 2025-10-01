<?php
require_once __DIR__ . '/config/db.php'; // load $pdo

$username = 'admin';
$password = 'admin123';

// Hash password before storing
$hash = password_hash($password, PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO admins (username, password) VALUES (:username, :password_hash)");
    $stmt->execute([
        ':username' => $username,
        ':password_hash' => $hash
    ]);
    echo "User inserted successfully!";
} catch (PDOException $e) {
    echo "Insert failed: " . $e->getMessage();
}
