<?php
// Start session
session_start();

// Include the connection file
include '../settings/connection.php';


// Handling form submission for sign up
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing the password for security
    $confirm_password = $_POST['confirm_password'];
    $home_address = $conn->real_escape_string($_POST['home_address']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $tel = $conn->real_escape_string($_POST['tel']);
    $role_ = $conn->real_escape_string($_POST['role_']);
    $profile_details = $conn->real_escape_string($_POST['profile_details']);

    // Check if passwords match
    $password_match = ($_POST['password'] === $confirm_password);

    // Check if user with the same username or email already exists
    $check_user_sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn,$check_user_sql);

    if (mysqli_num_rows($result) != 0) {
        echo "User with the same username or email already exists";
    } elseif (!$password_match) {
        echo "Passwords do not match";
    } else {
        $reg_sql = "INSERT INTO users (username, password, email, home_address, gender, tel, role_, profile_details) VALUES ('$username', '$password', '$email', '$home_address', '$gender', '$tel', '$role_', '$profile_details')";

        if ($conn->query($reg_sql) === TRUE) {
            header("Location: ../login/login_view.php"); // Redirect after successful signup
            exit();
        } else {
            echo "Error: " . $reg_sql . "<br>" . $conn->error;
        }
    }
}