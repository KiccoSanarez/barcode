<?php
session_start();

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'barcode_db';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user input and prevent SQL injection (you should use prepared statements)
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Query to fetch user data by username
    $query = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Correct password, set session and redirect to welcome page
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.html');
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Username not found.";
    }
}

$conn->close();
?>