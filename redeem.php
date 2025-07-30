<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Redeem Points – EcoKind</title>
    <link rel="stylesheet" href="./css/redeemstyle.css" />
</head>

<body class="light-mode">
    <!-- Header -->
    <header class="site-header">
        <div class="logo-container">
            <a href="index.php" class="logo-link">
                <img src="logo.png" alt="EcoKind Logo" class="logo" />
            </a>
            <div class="logo-text">
                <h1 class="company-name">EcoKind</h1>
                <p class="tagline">Reduce Waste. Spread Kindness.</p>
            </div>
        </div>
    </header>

    <!-- Navbar -->
    <nav>
        <div class="nav-left">
            <a href="index.php#about">About Us</a>
            <a href="donate.php">Donate</a>
            <a href="sale.php">Items for Sale</a>
            <a href="redeem.php">Redeem Points</a>
            <a href="ourdeeds.php">Our Deeds</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="redeem-section">
        <h2>Your EcoKind Points: <span id="points">0</span></h2>

        <div class="merch-grid">
            <div class="merch-item">
                <img src="mug.jpeg" alt="Eco Mug">
                <h3>EcoKind Mug</h3>
                <p>100 Points</p>
                <button onclick="redeem(100, 'EcoKind Mug')">Redeem</button>
            </div>

            <div class="merch-item">
                <img src="vest.jpeg" alt="Eco T-shirt">
                <h3>EcoKind T-Shirt</h3>
                <p>250 Points</p>
                <button onclick="redeem(250, 'EcoKind T-Shirt')">Redeem</button>
            </div>

            <div class="merch-item">
                <img src="tbag.jpeg" alt="Eco Tote Bag">
                <h3>EcoKind Tote Bag</h3>
                <p>150 Points</p>
                <button onclick="redeem(150, 'EcoKind Tote Bag')">Redeem</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <h3>EcoKind</h3>
                <p>We accept donations to reduce waste. Donated items are sold, and the funds are used for environmental efforts.</p>
            </div>
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p>Email: ecokind960@gmail.com</p>
                <p>Phone: +91 9841969149</p>
                <p>Address: Koteshwor, Kathmandu</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 EcoKind. All rights reserved.</p>
        </div>
    </footer>
    <script src="redeemscript.js"></script>
</body>

</html>