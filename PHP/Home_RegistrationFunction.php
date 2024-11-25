<?php

include 'Connection_String_Configuration.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection error.']);
    exit;
}


// Get the raw POST data (JSON body)
$data = json_decode(file_get_contents('php://input'), true);

// Check if the required fields are provided
if (isset($data['firstname'], $data['lastname'], $data['email'], $data['username'], $data['password'])) {
    $firstname = trim($data['firstname']);
    $lastname = trim($data['lastname']);
    $email = trim($data['email']);
    $username = trim($data['username']);
    $password = trim($data['password']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
        exit;
    }


    // Check if username or email already exists
    $query = "SELECT * FROM users WHERE user_email = ? OR user_username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $email, $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username or email already exists.']);
        exit;
    }

    // Prepare the INSERT query to insert new user into the database
    $insertQuery = "INSERT INTO users (user_firstname, user_lastname, user_email, user_password, user_username) VALUES (?, ?, ?, ?, ?)";
    $insertStmt = $conn->prepare($insertQuery);
    $insertStmt->bind_param('sssss', $firstname, $lastname, $email, $password, $username);

    if ($insertStmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Registration successful!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'An error occurred during registration.']);
    }

    // Close the statement and the connection
    $insertStmt->close();
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
}
