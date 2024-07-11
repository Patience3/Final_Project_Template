<?php

// Handle job deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_job'])) {
    $job_id = $_POST['job_id'];

    $sql = "DELETE FROM jobs WHERE job_id='$job_id'";
    $conn->query($sql);

    header("Location: admin_dashboard_view.php");
    exit();
}