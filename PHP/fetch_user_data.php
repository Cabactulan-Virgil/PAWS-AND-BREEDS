<?php
include 'Connection_String_Configuration.php'; // Include the database configuration

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch user data (example query)
$sql = "SELECT user_username, user_firstname, user_lastname, user_password, user_email FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['user_id']); // Assuming you pass user_id as a query parameter
$stmt->execute();
$result = $stmt->get_result();

// Fetch data and return as JSON
if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    echo json_encode($user_data);
} else {
    echo json_encode(["error" => "No user data found"]);
}

$conn->close();
