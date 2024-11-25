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
if (isset($data['user_id'], $data['firstname'], $data['lastname'], $data['email'], $data['username'], $data['password'])) {
    $userId = trim($data['user_id']);
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

    // Check if the email or username already exists (excluding current user's data)
    $query = "SELECT * FROM users WHERE (user_email = ? OR user_username = ?) AND user_id != ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ssi', $email, $username, $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username or email already exists.']);
        exit;
    }


    // Prepare the UPDATE query to update user data in the database
    $updateQuery = "UPDATE users SET user_firstname = ?, user_lastname = ?, user_email = ?, user_password = ?, user_username = ? WHERE user_id = ?";
    $updateStmt = $conn->prepare($updateQuery);
    $updateStmt->bind_param('sssssi', $firstname, $lastname, $email, $password, $username, $userId);

    if ($updateStmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'User information updated successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'An error occurred while updating user information.']);
    }

    // Close the statement and the connection
    $updateStmt->close();
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
}
