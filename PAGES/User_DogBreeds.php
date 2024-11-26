<?php
// Include the database connection configuration
include '../PHP/Connection_String_Configuration.php';

// Create the connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Paws and Breeds | User Home</title>
    <link rel="stylesheet" href="../CSS/User_DogBreeds.css">
    <link rel="icon" href="../Assets/1000001718 1.png">
    <link rel="stylesheet" href="../CSS/SweetAlert.css">
</head>

<body>
    <!-- Header Section -->
    <nav class="nav-links">
        <img src="../Assets/1000001718 1.png" class="logo-img" alt="Paws and Breeds Logo">
        <ul>
            <li><a href="#HEROOO" class="active">Home</a></li>
            <li><a id="Goto_DogBreeds">Dog Breeds</a></li>
            <li><a href="#REVIEWWWS">Reviews</a></li>

            <!-- Account Dropdown -->
            <li class="account-dropdown">
                <button class="dropdown-toggle" id="login-label">NAME</button>
                <ul class="dropdown-content" id="Dropdownnn">
                    <li><a href="#" id="Goto_UserAccountArea">Account</a></li>
                    <li><button id="LogoutButton">⚙️ LOGOUT</button></li>
                </ul>
            </li>

            <!-- Search Area -->
            <li>
                <input id="SearchAreaa" placeholder="Search..." aria-label="Search">
            </li>
        </ul>
    </nav>

    <!-- Dog-Breeds Section -->
    <section class="dog-breeds" id="DOGBREEEDS">
        <span class="dog-breeds-container">
            <span class="Garrrr">
                <div class="filterAreaa">
                    <select id="OptionforFilter">
                        <option value="">Select A Breed</option>
                        <option value="BullDoggie">Bull Doggie</option>
                        <option value="CatDog">Cat Doggie</option>
                    </select>
                    <div class="category-buttons">
                        <button>Family Dogs</button>
                        <button>Easy to Train Dogs</button>
                        <button>Low Maintenance Dogs</button>
                        <button>Good for First Time Owners</button>
                        <button>Apartment Dogs</button>
                        <button>Can Live with Cats</button>
                    </div>
                </div>

                <div class="articles-container">
                    <!-- Article Card 1 -->
                    <div class="article-card">
                        <img src="../Assets/AmericanBully.jpeg" class="article-image">
                        <h3>American Bully</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 2 -->
                    <div class="article-card">
                        <img src="../Assets/Poodle.jpg" class="article-image">
                        <h3>Poodle</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 3 -->
                    <div class="article-card">
                        <img src="../Assets/GermanSheperd.jpg" class="article-image">
                        <h3>German Shepherd</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 4 -->
                    <div class="article-card">
                        <img src="../Assets/Beagle.jpg" class="article-image">
                        <h3>Beagle</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 5 -->
                    <div class="article-card">
                        <img src="../Assets/GoldenRetriever.jpg" class="article-image">
                        <h3>Golden Retriever</h3>

                        <button>Read More</button>
                    </div>
                    <!-- Article Card 6 -->
                    <div class="article-card">
                        <img src="../Assets/Labrador.jpg" class="article-image">
                        <h3>Labrador</h3>

                        <button>Read More</button>
                    </div>
                </div>
            </span>

            </div>
            <!-- Pagination -->
            <div class="pagination">
                <button class="pagination-button">1</button>
                <button class="pagination-button">2</button>
                <button class="pagination-button">3</button>
                <button class="pagination-button">4</button>
                <button class="pagination-button">5</button>
                <button class="pagination-button">6</button>
                <button class="pagination-button">Next</button>
            </div>
    </section>


    <script src="../JS/SweetAlert.js"></script>
    <script src="../JS/User_DogBreeds.js"></script>
</body>

</html>