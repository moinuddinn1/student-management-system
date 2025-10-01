<?php
require_once __DIR__ . '/config/db.php'; // load $pdo

$username = 'admin';
$password = 'admin123'; // user input

$stmt = $pdo->prepare("SELECT password FROM admins WHERE username = :username");
$stmt->execute([':username' => $username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    echo "Login success!";
} else {
    echo "Invalid username or password.";
}
