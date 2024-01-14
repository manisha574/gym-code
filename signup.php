
<?php


// Process form submission
if (isset($_POST["submit"])) {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $confirm_pwd = $_POST['confirm_pwd '];
    $gender = $_POST['gender'];
    $con=mysqli_connect("localhost","root","","signupzenith");
    $q="insert into users values(NULL,'$full_name','$username','$lastname','$email','$phone_number','$password','$gender')";
    /*if(empty($fullname) OR empty($username)OR empty($email)OR empty($phone_number)OR empty($password)OR empty($confirm_pwd)OR empty($gender)){
        array_push($errors,"All fields are required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errrors,"Email is not valid");
    }
    if(strlen($password)<8){
        array_push($errrors,"pwd must be at least 8 char");
    }
    if(!filter_var($password!==$confirm_pwd)){
        array_push($errrors,"ped does not match");
    }
    if(count($errors)>0){
        array_push($errrors,"Email is not valid");
    }
    if (count($errors)>0) {
        foreach ($errors as  $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
}*/
if(!$con){
    die("connection failed:".mysqli_connect_error());
}
echo "connection succesfull";
}


   
?>
