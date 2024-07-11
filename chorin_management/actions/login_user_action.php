<?php

// Include the connection file
include '../settings/connection.php';



// User authentication (login)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    // Execute the query using the connection from the connection file
    $result = mysqli_query($conn, $sql);

    
    echo 'Works untill here';


    // Check if any row was returned

    if (mysqli_num_rows($result) == 0) {
        // If no record found, provide appropriate response
        echo "User not registered: Username not found";
        exit(); // Stop processing
    } else {

        // Fetch the record
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["role_"] = $row["role_"];
            if ($row["role_"] == "admin") {
                header("Location: ../view/admin/admin_home_view.php");
                exit();
            } else {
                header("Location: ../view/user/user_dashboard_view.php");
                exit();
            }
        } else {
            echo "Incorrect Password";
            exit();
        }
    }
}

echo 'Wrong file';

exit();
