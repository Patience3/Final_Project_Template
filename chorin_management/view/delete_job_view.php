<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ChorIn";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST['job_id'];

    $sql = "DELETE FROM jobs WHERE job_id='$job_id'";
    $conn->query($sql);
}

header("Location: admin_dashboard.php");
?>
