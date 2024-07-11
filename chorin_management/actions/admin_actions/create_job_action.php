<?php
// Handle job creation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_job'])) {
    $jobTitle = $_POST['jobTitle'];
    $jobLocation = $_POST['jobLocation'];
    $jobTime = $_POST['jobTime'];
    $jobDescription = $_POST['jobDescription'];
    $admin_id = $_SESSION['admin_id'];

    $sql = "INSERT INTO jobs (admin_id, location, required_time, job_details, status) VALUES ('$admin_id', '$jobLocation', '$jobTime', '$jobDescription', 'open')";
    $conn->query($sql);

    header("Location: admin_dashboard_view.php");
    exit();
}
if ($conn->query($sql) === TRUE) {
    echo "Job created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}