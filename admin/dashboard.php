<?php
require_once __DIR__ . '/auth_check.php';
require_once __DIR__ . '/../config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard — RepairTrack</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <header class="admin-header">
        <div class="logo">RepairTrack Admin</div>
        <nav>
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
            <a href="logout.php" class="logout-link">Logout</a>
        </nav>
    </header>

    <main class="dashboard-main">
        <div class="glass-card">
            <h1>Dashboard</h1>
            <p>Placeholder — customers, devices, workers, transactions, and financials sections will go here.</p>
        </div>
    </main>

</body>
</html>