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
    <link rel="stylesheet" href="../CSS/User_Account.css">
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

    <!-- Main Content -->
    <div id="AccountArea">
        <div id="UserDetails">
            <input type="hidden" id="Stored_User_ID" value="">
            <h1>User Information</h1>
            <div>
                <p>First Name: </p><span id="FirstnameArea"><?= htmlspecialchars($user['user_firstname']) ?></span>
            </div>
            <div>
                <p>Last Name: </p><span id="LastNameArea"><?= htmlspecialchars($user['user_lastname']) ?></span>
            </div>
            <div>
                <p>Username: </p><span id="UsernameArea"><?= htmlspecialchars($user['user_username']) ?></span>
            </div>
            <div>
                <p>Password: </p><span id="PasswordArea"><?= htmlspecialchars($user['user_password']) ?></span>
                <button id="PasswordShowerBtn">Show</button>
            </div>
            <div>
                <p>Email: </p><span id="EmailArea"><?= htmlspecialchars($user['user_email']) ?></span>
            </div>

            <button id="EditUserBtn">Edit</button>
        </div>

        <div id="EditForm" style="display:none;">
            <h1>Edit User Information</h1>
            <form method="POST">
                <div>
                    <p>First Name: </p><input id="Edit_FirstName" name="first_name" placeholder="First Name..">
                </div>
                <div>
                    <p>Last Name: </p><input id="Edit_LastName" name="last_name" placeholder="Last Name..">
                </div>
                <div>
                    <p>Username: </p><input id="Edit_Username" name="username" placeholder="Username..">
                </div>
                <div>
                    <p>Password: </p><input id="Edit_Password" name="password" placeholder="Password..">
                </div>
                <div>
                    <p>Email: </p><input id="Edit_Email" name="email" placeholder="Email..">
                </div>
                <button type="submit" name="save" id="SaveUserBtn">Save</button>
                <button type="button" id="CancelUserBtn">Cancel</button>
            </form>
        </div>
    </div>

    </div>



    <script src="../JS/SweetAlert.js"></script>
    <script src="../JS/User_Account.js"></script>
</body>

</html>