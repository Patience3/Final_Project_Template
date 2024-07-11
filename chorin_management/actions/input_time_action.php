<?php




// Availability (time) input (for users)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["input_availability"])) {
    // Validate and sanitize input
    $date = $_POST["date"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    
    // Insert availability into database
    $sql = "INSERT INTO availability (user_id, date, start_time, end_time, status) 
            VALUES ('1', '$date', '$start_time', '$end_time', 'available')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Availability submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

