<?php
session_start(); // Start the session

// Define the correct username and password
$correct_username = 'yamz_computerz';
$correct_password = 'yamz0987';

// Get the username and password from the POST request
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Check if the fields are empty
if (empty($username) || empty($password)) {
    header("Location: admin_login.php?error=empty");
    exit();
}

// Validate the username and password
if ($username === $correct_username && $password === $correct_password) {
    // Credentials are correct, set session variable and redirect
    $_SESSION['loggedin'] = true; // Set a session variable to indicate the user is logged in
    header("Location: yamz.html?login=success"); // Redirect to the feedback page
    exit();
} else {
    // Credentials are incorrect, redirect back to login page with error
    header("Location: admin_login.php?error=invalid");
    exit();
}
?>
