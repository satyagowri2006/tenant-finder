<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Finder | Find Your Dream Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #003366;
            color: white;
        }
        header nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
            background: url('house.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .search-box {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .search-box input {
            padding: 12px;
            width: 60%;
            border-radius: 5px 0 0 5px;
            border: 1px solid #ccc;
        }
        .search-box button {
            padding: 12px;
            background: #ffcc00;
            color: black;
            border: none;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
            font-weight: bold;
        }
        .options {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .option {
            padding: 15px 25px;
            background: #ffcc00;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .featured {
            text-align: center;
            padding: 40px;
        }
        .featured img {
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
        }
        .about {
            background: white;
            padding: 40px;
            text-align: center;
        }
        .about h2, .about h3 {
            color: #003366;
        }
        footer {
            text-align: center;
            background: #003366;
            color: white;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Tenant Finder</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="profile.php">Profile</a>
            <a href="contact.php">Contact</a>
            <a href="available_properties.php">Available Properties</a>
            <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'owner'): ?>
                <a href="add_property.html">Add Property</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>

    <!-- Hero Section with Search Bar -->
    <section class="hero">
        <h2>Find Your Dream Home</h2>
        <p>Search from thousands of verified listings.</p>
        <div class="search-box">
            <input type="text" placeholder="Enter city, locality, or property type">
            <button>Search</button>
        </div>
    </section>

   <!-- Property Categories -->
<section class="options">
    <div class="option" onclick="navigateTo('available_properties.php')">Buy</div>
    <div class="option" onclick="navigateTo('rent_properties.php')">Rent</div>
    <div class="option" onclick="navigateTo('sell_property.php')">Sell</div>
</section>

<script>
    function navigateTo(url) {
        window.location.href = url;
    }
</script>

<style>
    .options {
        display: flex;
        gap: 20px;
        justify-content: center;
        margin-top: 20px;
    }
    .option {
        background-color: #002147; /* Dark Blue */
        color: white;
        padding: 15px 25px;
        border-radius: 5px;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
        cursor: pointer;
    }
    .option:hover {
        background-color: #003366; /* Slightly lighter blue */
    }
</style>


    <!-- Featured Properties -->
    <section class="featured">
        <h2>Featured Property</h2>
        <img src="house-image.jpg" alt="Luxury Apartment">
        <p>Modern 3BHK apartment in the heart of the city with all amenities.</p>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2>About Us</h2>
        <p>Welcome to <strong>Real Estate Portal</strong>, your one-stop destination for buying, renting, and selling properties.</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Real Estate Portal | All rights reserved.</p>
    </footer>

</body>
</html>
