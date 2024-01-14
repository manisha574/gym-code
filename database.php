<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "zenith";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;".mysqli_connect_error());
}
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully"; // Add this line for debugging
}

?>