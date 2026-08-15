<?php
// Public landing page — hero, services, contact, track repair CTA
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechFix — Computer Repair Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="logo">RepairTrack
        </div>
        <nav>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="track.php" class="track-btn">Track Repair</a>
        </nav>
    </header>

    <section class="hero">
        <div class="glass-card">
            <h1>Fast, Reliable Computer Repair</h1>
            <p>Bring in your device. We'll diagnose it, fix it, and keep you updated every step of the way.</p>
            <a href="track.php" class="glow-btn">Track Your Repair</a>
        </div>
    </section>

    <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-grid">
            <div class="service-card">
                <h3>Hardware Repair</h3>
                <p>Screen replacement, battery swaps, port repairs, and more.</p>
            </div>
            <div class="service-card">
                <h3>Software Troubleshooting</h3>
                <p>OS reinstalls, virus removal, driver fixes, performance tuning.</p>
            </div>
            <div class="service-card">
                <h3>Data Recovery</h3>
                <p>Recover lost files from failing drives or corrupted systems.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Visit Us</h2>
        <p>123 Sample Street, Your City</p>
        <p>Open Mon–Sat, 9am–6pm</p>
    </section>

    <footer class="site-footer">
        <p>&copy; <?php echo date("Y"); ?> TechFix. All rights reserved.</p>
        <a href="admin/login.php" class="admin-link">Admin</a>
    </footer>

    <script src="script.js"></script>
</body>
</html>