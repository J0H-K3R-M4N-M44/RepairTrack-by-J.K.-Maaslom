<?php
require_once __DIR__ . '/config/database.php';

$tracking_id = isset($_GET['tracking_id']) ? trim($_GET['tracking_id']) : '';

// Basic format validation
if (!preg_match('/^[A-Fa-f0-9]{5}$/', $tracking_id)) {
    $error = "Invalid tracking ID format.";
} else {
    // TODO: once transactions table exists, replace this with real lookup:
    // $stmt = $pdo->prepare("SELECT * FROM transactions WHERE tracking_id = :tracking_id");
    // $stmt->execute(['tracking_id' => $tracking_id]);
    // $row = $stmt->fetch();

    $found = false; // placeholder — no real data yet
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair Status — TechFix</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="logo"><a href="index.php">TechFix</a></div>
    </header>

    <section class="track-section">
        <div class="glass-card">
            <?php if (isset($error)): ?>
                <h1>Error</h1>
                <p class="error-msg"><?php echo htmlspecialchars($error); ?></p>
                <a href="track.php" class="glow-btn">Try Again</a>
            <?php elseif (!$found): ?>
                <h1>No Record Found</h1>
                <p>We couldn't find a repair with tracking ID <strong><?php echo htmlspecialchars($tracking_id); ?></strong>.</p>
                <a href="track.php" class="glow-btn">Try Again</a>
            <?php else: ?>
                <!-- TODO: real result rendering once transactions table exists -->
                <h1>Repair Status</h1>
                <p>Tracking ID: <strong><?php echo htmlspecialchars($tracking_id); ?></strong></p>
            <?php endif; ?>
        </div>
    </section>

    <footer class="site-footer">
        <p>&copy; <?php echo date("Y"); ?> TechFix. All rights reserved.</p>
        <a href="admin/login.php" class="admin-link">Admin</a>
    </footer>

    <script src="script.js"></script>
</body>
</html>