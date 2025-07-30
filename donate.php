<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donate - EcoKind</title>
    <link rel="stylesheet" href="./css/donatestyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
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

    <!-- Donation Section -->
    <section class="donation-section">
        <h2>What Would You Like to Donate?</h2>
        <div class="donation-grid">
            <div class="donation-card">
                <img src="dfood.jpeg" alt="Food" />
                <h3>Food</h3>
                <button onclick="openForm('Food')">Donate</button>
            </div>
            <div class="donation-card">
                <img src="dbooks.jpeg" alt="Books" />
                <h3>Books</h3>
                <button onclick="openForm('Books')">Donate</button>
            </div>
            <div class="donation-card">
                <img src="dclothes.jpeg" alt="Clothes" />
                <h3>Clothes</h3>
                <button onclick="openForm('Clothes')">Donate</button>
            </div>
            <div class="donation-card">
                <img src="ditems.jpeg" alt="Other Items" />
                <h3>Other Items</h3>
                <button onclick="openForm('Other')">Donate</button>
            </div>
        </div>
    </section>

    <!-- Impact Counter -->
    <section class="impact-section" id="impact">
        <h2>Our Collective Impact</h2>
        <p>Together, we have helped more than:</p>
        <div class="impact-number" id="impactCounter">0</div>
    </section>

    <!-- Testimonials -->
    <section class="testimonial-section" id="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonial-slider">
            <div class="testimonial-track">
                <div class="testimonial-box">
                    <img src="user1.jpeg" alt="User 1" />
                    <p>"EcoKind helped me connect with real causes in my area."</p>
                    <h4>- John Doe</h4>
                </div>
                <div class="testimonial-box">
                    <img src="user2.jpeg" alt="User 2" />
                    <p>"The donation process was quick and easy!"</p>
                    <h4>- Pranav Rai</h4>
                </div>
                <div class="testimonial-box">
                    <img src="user3.jpeg" alt="User 3" />
                    <p>"I feel good knowing my items are being reused."</p>
                    <h4>- Prakriti Rai</h4>
                </div>
                <div class="testimonial-box">
                    <img src="user4.jpeg" alt="User 4" />
                    <p>"EcoKind made it so easy to donate items I no longer needed."</p>
                    <h4>- Emily Davis</h4>
                </div>
                <div class="testimonial-box">
                    <img src="user5.jpeg" alt="User 5" />
                    <p>"I love how EcoKind ensures my donations go to the right people."</p>
                    <h4>- Sarah Wilson</h4>
                </div>
                <div class="testimonial-box">
                    <img src="user6.jpeg" alt="User 6" />
                    <p>"A great initiative to reduce waste and help communities."</p>
                    <h4>- Ful Maya</h4>
                </div>
                <!-- Duplicate testimonials for seamless scrolling -->
                <div class="testimonial-box">
                    <img src="user1.jpeg" alt="User 1" />
                    <p>"EcoKind helped me connect with real causes in my area."</p>
                    <h4>- John Doe</h4>
                </div>
                <div class="testimonial-box">
                    <img src="user2.jpeg" alt="User 2" />
                    <p>"The donation process was quick and easy!"</p>
                    <h4>- Jane Smith</h4>
                </div>
                <div class="testimonial-box">
                    <img src="user3.jpeg" alt="User 3" />
                    <p>"I feel good knowing my items are being reused."</p>
                    <h4>- Prakriti Rai</h4>
                </div>
            </div>
    </section>
    <!-- Donation Form Modal -->
    <div class="modal" id="donationForm">
        <div class="modal-content">
            <span class="close" onclick="closeForm()">&times;</span>
            <h2>Donate Your Item</h2>
            <form onsubmit="submitDonationForm(event)">
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" placeholder="Enter your full name" required />
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" placeholder="Enter your phone number" required />
                </div>
                <div class="form-group">
                    <label for="address">Address/Location</label>
                    <div class="address-options">
                        <button type="button" onclick="getLocation()">Use Current Location</button>
                        <input type="text" id="address" placeholder="Or type your address manually" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Item Description</label>
                    <textarea id="description" placeholder="Describe the item(s) you are donating" required></textarea>
                </div>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </div>

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


    <script src="donatescript.js"></script>
</body>

</html>