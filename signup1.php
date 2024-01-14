<?php
 


$errors = array(); // Initialize an array to store errors

if (isset($_POST["submit"])) {
    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_pwd = isset($_POST['confirm_pwd']) ? $_POST['confirm_pwd'] : '';

    // Check if 'gender' is set in $_POST before accessing it
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    // Validation
    if (empty($full_name) || empty($username) || empty($email) || empty($phone_number) || empty($password) || empty($confirm_pwd) || empty($gender)) {
        array_push($errors, "All fields are required");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }

    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters");
    }

    if ($password !== $confirm_pwd) {
        array_push($errors, "Passwords do not match");
    }

    if (count($errors) > 0) {
        foreach ($errors as  $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        // Hash the password
        require_once "database.php";
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
         
        // Insert user into the database
        $stmt = $conn->prepare("INSERT INTO users (full_name, username, email, phone_number, password, gender) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $full_name, $username, $email, $phone_number, $passwordHash, $gender);

        if ($stmt->execute()) {
            echo "Registration successful";
            header("Location:gym.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}


?>
