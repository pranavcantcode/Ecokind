<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoKind – Donate & Earn Points</title>
    <link rel="stylesheet" href="./css/indexstyle.css" />
</head>

<body class="light-mode">

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


    <nav>
        <div class="nav-left">
            <a href="index.php#about">About Us</a>
            <a href="donate.php">Donate</a>
            <a href="sale.php">Items for Sale</a>
            <a href="redeem.php">Redeem Points</a>
            <a href="ourdeeds.php">Our Deeds</a>
        </div>

    </nav>

    <!-- Media Container -->
    <section class="media-container">
        <video id="bannerVideo" autoplay loop class="intro-video" muted playsinline>
            <source src="ecokind-sustainable-donation-video-summary.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </section>

    <section id="about">
        <h2>About EcoKind</h2>

        <!-- Row 1: Food Waste -->
        <div class="about-row">
            <div class="text-box">
                <h3>Donate Leftover Food</h3>
                <p>Your leftover food can bring a smile to someone’s face. EcoKind ensures it reaches the right people through our verified NGO partners.</p>
            </div>
            <div class="img-box">
                <img src="wastefood.webp" alt="Donate Food" />
            </div>
        </div>

        <!-- Row 2: Clothing Waste -->
        <div class="about-row reverse">
            <div class="text-box">
                <h3>Clothing Overproduction & Waste</h3>
                <p>Fast fashion creates massive waste and environmental damage. EcoKind helps extend the life of clothes and reduce harmful impact through responsible redistribution.</p>
            </div>
            <div class="img-box">
                <img src="wasteclothes.jpeg" alt="Clothing Waste" />
            </div>
        </div>

    </section>

    </section>

    <!-- Donation Section -->
    <section id="donate" class="section">
        <h2>Donate Items or Food</h2>
        <p>Support communities by donating extra food, clothes, or books.</p>
        <button onclick="window.location.href='donate.php'">Donate Now</button>
    </section>

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

    <script src="indexscript.js"></script>



  
</body>

</html>