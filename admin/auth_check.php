<?php
session_start();

$timeout_duration = 1800; // 30 minutes in seconds

// Not logged in at all
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

// Check idle timeout
if (isset($_SESSION['last_active']) && (time() - $_SESSION['last_active'] > $timeout_duration)) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit;
}

// Update last active timestamp
$_SESSION['last_active'] = time();