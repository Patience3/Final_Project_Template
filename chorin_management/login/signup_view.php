<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ChorIn - Sign Up</title>
<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="container">
        <h2>Sign Up</h2>
        <form action="../signup_user_action.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <label for="home_address">Address:</label>
            <input type="text" id="home_address" name="home_address" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="tel">Telephone:</label>
            <input type="tel" id="tel" name="tel" required>
            <label for="role_">Role:</label>
            <select id="role_" name="role_" required>
                <option value="client">Client</option>
                <option value="admin">Admin</option>
            </select>
            <label for="profile_details">Profile Details:</label>
            <textarea id="profile_details" name="profile_details"></textarea>
            <button type="submit" name="signup">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login_view.php">Sign in</a></p>
    </div>
</body>
</html>
