<?php
session_start();

// Already logged in? redirect to dashboard
if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — TechFix</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <section class="login-section">
        <div class="glass-card login-card">
            <h1>Admin Login</h1>

            <?php if (isset($_GET['error'])): ?>
                <p class="error-msg">Invalid username or password.</p>
            <?php endif; ?>

            <form action="process_login.php" method="POST" id="login-form" autocomplete="off">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="glow-btn" id="login-submit-btn">Log In</button>
            </form>
        </div>
    </section>

    <script src="../js/login.js"></script>
</body>
</html>