<?php
session_start();
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    header("Location: login.php?error=1");
    exit;
}

$stmt = $pdo->prepare("SELECT id, username, password FROM admin WHERE username = :username");
$stmt->execute(['username' => $username]);
$admin = $stmt->fetch();

if ($admin && password_verify($password, $admin['password'])) {
    // Prevent session fixation
    session_regenerate_id(true);

    $_SESSION['admin_id'] = $admin['id'];
    $_SESSION['admin_username'] = $admin['username'];
    $_SESSION['last_active'] = time();

    header("Location: dashboard.php");
    exit;
}

// Invalid credentials — same generic error either way
header("Location: login.php?error=1");
exit;