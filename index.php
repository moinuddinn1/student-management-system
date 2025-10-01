<?php
// index.php at project root

session_start();

// If user already logged in → go to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: public/dashboard.php");
    exit;
} else {

    // Otherwise → show login page
    header("Location: public/login.php");
    exit;
}
