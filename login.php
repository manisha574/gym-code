<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION["username"])) {
   header("Location: zenith2.php");
}

echo "Script is running";
include 'database.php';

if (isset($_POST["submit"])) {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform database connection and login validation here

    $q = "SELECT * FROM users WHERE username='$username'";
    echo "SQL Query: $q"; 
    $result = mysqli_query($conn, $q);

    if (!$result) {
        // Display SQL error, if any
        echo "SQL Error: " . mysqli_error($conn);
    }

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $hashedPassword = $user['password'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Login successful
            session_start();
            $_SESSION['username'] = $username;
            header("Location:zenith3.php"); // Replace 'index.php' with the actual filename of your main site
            exit();
        } else {
            echo "Provided Password: $password<br>";
            echo "Stored Hash: $hashedPassword<br>";
            echo "Login failed: Incorrect password";
        }
    } else {
        echo "No user found for username: $username";
    }

    mysqli_close($conn);
}
?>
