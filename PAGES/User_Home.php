<?php
// Include the database connection configuration
include '../PHP/Connection_String_Configuration.php'; 

// Create the connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    // If the connection fails, show an error message and terminate the script
    die("Connection failed: " . $conn->connect_error);
}

// Start session to access user ID
session_start();

// Check if the user is logged in and retrieve the user ID

$user_id = $_POST['user_id'] ?? $_SESSION['user_id'] ?? null;  // Get user_id from POST or session

// Fetch user details
$sql = "SELECT user_firstname, user_lastname, user_email, user_password, user_username FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);  // 'i' means the user_id is an integer
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

// Update user details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated values from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // If a new password is provided, hash it, otherwise retain the old one
    $new_password = $password ? password_hash($password, PASSWORD_DEFAULT) : $user['user_password'];

    // Update the user details in the database
    $update_sql = "UPDATE users SET user_firstname = ?, user_lastname = ?, user_username = ?, user_email = ?, user_password = ? WHERE user_id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sssssi", $first_name, $last_name, $username, $email, $new_password, $user_id);
    
    if ($stmt->execute()) {
        // Redirect to the profile page to show the updated details
        header("Location: User_Home.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
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
</head>

<body>
    <!-- Header Section -->
    <nav class="nav-links">
        <img src="../Assets/1000001718 1.png" class="logo-img" alt="Paws and Breeds Logo">
        <ul>
            <li><a href="#HEROOO" class="active">Home</a></li>
            <li><a href="#DOGBREEEDS">Dog Breeds</a></li>
            <li><a href="#REVIEWWWS">Reviews</a></li>
            
            <!-- Account Dropdown -->
            <li class="account-dropdown">
                <button class="dropdown-toggle" id="login-label">NAME</button>
                <ul class="dropdown-content" id="Dropdownnn">
                    <li><a href="#" id="dog-profiles-link">Account</a></li>
                    <li><button id="LogoutButton">⚙️ LOGOUT</button></li>
                </ul>
            </li>
            
            <!-- Search Area -->
            <li>
                <input id="SearchAreaa" placeholder="Search..." aria-label="Search">
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div id="AccountArea">
        <div id="UserDetails">
            <input type="hidden" name="user_id" id="user_id" value="">
            <h1>User Information</h1>
            <p>First Name: <span id="FirstnameArea"><?= htmlspecialchars($user['user_firstname']) ?></span></p>
            <p>Last Name: <span id="LastNameArea"><?= htmlspecialchars($user['user_lastname']) ?></span></p>
            <p>Username: <span id="UsernameArea"><?= htmlspecialchars($user['user_username']) ?></span></p>
            <p>Password: <span id="PasswordArea">#############</span></p>
            <p>Email: <span id="EmailArea"><?= htmlspecialchars($user['user_email']) ?></span></p>
            <button id="EditUserBtn">Edit</button>
        </div>

        <div id="EditForm" style="display:none;">
            <h1>Edit Information</h1>
            <form method="POST">
                <p>First Name: <input id="Edit_FirstName" name="first_name" value="<?= htmlspecialchars($user['user_firstname']) ?>" placeholder="First Name.."></p>
                <p>Last Name: <input id="Edit_LastName" name="last_name" value="<?= htmlspecialchars($user['user_lastname']) ?>" placeholder="Last Name.."></p>
                <p>Username: <input id="Edit_Username" name="username" value="<?= htmlspecialchars($user['user_username']) ?>" placeholder="Username.."></p>
                <p>Password: <input id="Edit_Password" name="password" type="password" placeholder="Password.."></p>
                <p>Email: <input id="Edit_Email" name="email" value="<?= htmlspecialchars($user['user_email']) ?>" placeholder="Email.."></p>
                <button type="submit" id="SaveUserBtn">Save</button>
                <button type="button" id="CancelUserBtn">Cancel</button>
            </form>
        </div>
    </div>

    </div>

        


    <script src="../JS/User_Home.js"></script>
</body>
</html>
