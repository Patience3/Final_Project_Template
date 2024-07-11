<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ChorIn";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobTitle = $_POST['jobTitle'];
    $jobLocation = $_POST['jobLocation'];
    $jobTime = $_POST['jobTime'];
    $jobDescription = $_POST['jobDescription'];
    $admin_id = $_SESSION['admin_id'];

    $sql = "INSERT INTO jobs (admin_id, location, required_time, job_details, status) VALUES ('$admin_id', '$jobLocation', '$jobTime', '$jobDescription', 'unpaired')";
    $conn->query($sql);
}

header("Location: admin_dashboard.php");
?>
