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
    <link rel="stylesheet" href="../CSS/User_Home.css">
    <link rel="icon" href="../Assets/1000001718 1.png">
    <link rel="stylesheet" href="../CSS/SweetAlert.css">
</head>

<body>
    <!-- Header Section -->
    <nav class="nav-links">
        <img src="../Assets/1000001718 1.png" class="logo-img" alt="Paws and Breeds Logo">
        <ul>
            <li><a id="Goto_Homee">Home</a></li>
            <li><a id="Goto_DogBreeds">Dog Breeds</a></li>

            <!-- Account Dropdown -->
            <li class="account-dropdown">
                <button class="dropdown-toggle" id="login-label">NAME</button>
                <ul class="dropdown-content" id="Dropdownnn">
                    <li><a href="#" id="Goto_UserAccountArea">Account</a></li>
                    <li><button id="LogoutButton">⚙️ LOGOUT</button></li>
                </ul>
            </li>

        </ul>
    </nav>



    <!-- Hero Section -->
    <section class="hero" id="HEROOO">
        <div class="hero-slider">
            <!-- First Slide (Hero Content) -->
            <div class="slide active">
                <div class="hero-content">
                    <h1>Find the Breed That Fits Your<br>Lifestyle!</h1>
                    <p>From tiny French Bulldogs to giant Great Danes, our dog breed gallery has everything you need to know about your favourite dog breed!</p>
                    <!-- Know About Us Button with Link -->
                </div>
                <img src="../Assets/1000001726 1.png" class="hero-image">
            </div>
        </div>


        <span class="AlignAreee">
            <h2>What Pet Parents are Saying</h2>
            <div class="review">
                <p><strong>Virgil G.</strong></p>
                ⭐⭐⭐⭐★
                <p>Namaak akong iro, gipaak pud nako.</p>
            </div>

            <div class="review">
                <p><strong>Chrisha K.</strong></p>
                ⭐⭐⭐⭐⭐
                <p>MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW MEOW.</p>
                </form>
            </div>

            <div class="review">
                <p><strong>Amiel B.</strong></p>
                ⭐⭐★★★
                <p>From tiny French Bulldogs to giant Great Danes, our dog breed gallery has everything you need to know about your favourite dog breed!</p>
                </form>
            </div>
            <button id="ShareBtnnn">Write a FeedBack!</button>
        </span>





    </section>



    <script src="../JS/SweetAlert.js"></script>
    <script src="../JS/User_Home.js"></script>
</body>

</html>