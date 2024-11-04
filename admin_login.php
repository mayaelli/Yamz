<?php
session_start(); // Start the session

// Check if the user is already logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Redirect to the feedback page if already logged in
    header("Location: yamz.php"); // Change to your feedback page
    exit();
}

// Display error messages if any
$error_message = ''; // Initialize error message variable
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'empty') {
        $error_message = '<p class="error">Please fill in all fields.</p>';
    } elseif ($_GET['error'] == 'invalid') {
        $error_message = '<p class="error">Invalid username or password.</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" type="image/png" href="images/title.png">
    <link rel="stylesheet" href="admin_login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="authenticate.php" method="post">
            <h1>Admin Login</h1>
            <?php echo $error_message; ?> <!-- Display error messages here -->
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bx-lock-open-alt'></i>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
