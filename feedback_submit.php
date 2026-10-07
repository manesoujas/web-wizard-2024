<?php


// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $department = $_POST['department'];
    $feedback = $_POST['feedback'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'feedback_college');
    
    // Check for connection error
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO feedbacks (department, feedback) VALUES (?, ?)");
    $stmt->bind_param("ss", $department, $feedback);

    // Execute and check if the feedback is submitted
    if ($stmt->execute()) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>
