<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoKind | Marketplace</title>
    <link rel="stylesheet" href="./css/salestyle.css" />
    <script defer src="salescript.js"></script>
    <link rel="icon" href="logo.png" type="image/png">
</head>

<body>
    <div class="page-wrapper">
        <!-- Header -->
        <header class="site-header">
            <div class="logo-container">
                <a href="index.php" class="logo-link">
                    <img src="logo.png" alt="EcoKind Home Logo" class="logo" />
                </a>
                <div class="logo-text">
                    <h1 class="company-name">EcoKind</h1>
                    <p class="tagline">Reduce Waste. Spread Kindness.</p>
                </div>
            </div>
        </header>

        <!-- Navbar -->
        <nav class="navbar" aria-label="Main Navigation">
            <div class="nav-left">
                <a href="index.php#about">About Us</a>
                <a href="donate.php">Donate</a>
                <a href="sale.php">Items for Sale</a>
                <a href="redeem.php">Redeem Points</a>
                <a href="ourdeeds.php">Our Deeds</a>
            </div>
            <div class="nav-right">
                <button id="cartToggleBtn" class="cart-toggle-btn" aria-label="Toggle cart">🛒 Cart</button>
            </div>
        </nav>

        <!-- Cart Sidebar Panel -->
        <aside id="cartSidebar" class="cart-sidebar hidden">
            <button class="close-cart-btn" id="closeCartBtn" aria-label="Close cart">✖</button>
            <h2>Your Cart</h2>
            <ul id="cartItems"></ul>
            <div class="cart-total">
                Total: ₹<span id="totalAmount">0</span>
            </div>
            <button class="checkout-btn">Checkout</button>
        </aside>

        <!-- Main Content -->
        <main class="item-container" aria-label="Product Listings">
            <h1>Explore Donated Items</h1>
            <div class="product-grid" id="productGrid">
                <!-- JS will insert product cards here -->
                <div class="product-card">
                    <img src="jacket.jpg" alt="Used Jacket">
                    <h3>Used Jacket</h3>
                    <p>₹299</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="books.jpg" alt="Novel Set">
                    <h3>Novel Set</h3>
                    <p>₹199</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="bottle.jpg" alt="Reusable Bottle">
                    <h3>Reusable Bottle</h3>
                    <p>₹149</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="bag.jpg" alt="Eco Bag">
                    <h3>Eco Bag</h3>
                    <p>₹99</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="lamp.jpg" alt="Table Lamp">
                    <h3>Table Lamp</h3>
                    <p>₹259</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="scarf.jpg" alt="Wool Scarf">
                    <h3>Wool Scarf</h3>
                    <p>₹129</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="headphones.jpg" alt="Used Headphones">
                    <h3>Used Headphones</h3>
                    <p>₹349</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-card">
                    <img src="thermos.jpg" alt="Thermos Flask">
                    <h3>Thermos Flask</h3>
                    <p>₹179</p>
                    <button>Add to Cart</button>
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
                <p>Follow us on social media to stay updated!</p>
            </div>
        </footer>
    </div>
</body>

</html>