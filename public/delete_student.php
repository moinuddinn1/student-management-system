<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../src/controllers/StudentController.php';

$studentController = new StudentController($conn);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $studentController->deleteStudent($id);
}

header("Location: dashboard.php");
exit;
