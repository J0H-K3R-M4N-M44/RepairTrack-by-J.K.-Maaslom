<?php
// Public tracking ID search page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Repair — TechFix</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="logo"><a href="index.php">TechFix</a></div>
    </header>

    <section class="track-section">
        <div class="glass-card">
            <h1>Track Your Repair</h1>
            <p>Enter your 5-character tracking ID below.</p>

            <form action="track_result.php" method="GET" id="track-form" autocomplete="off">
                <input
                    type="text"
                    name="tracking_id"
                    id="tracking_id"
                    maxlength="5"
                    placeholder="e.g. A1F09"
                    required
                    pattern="[A-Fa-f0-9]{5}"
                    title="Enter a valid 5-character hex tracking ID"
                >
                <button type="submit" class="glow-btn" id="track-submit-btn">Search</button>
            </form>

            <p id="track-error" class="error-msg" style="display:none;">Please enter a valid tracking ID.</p>
        </div>
    </section>

    <footer class="site-footer">
        <p>&copy; <?php echo date("Y"); ?> TechFix. All rights reserved.</p>
        <a href="admin/login.php" class="admin-link">Admin</a>
    </footer>

    <script src="script.js"></script>
</body>
</html>