<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];

    // Create a connection to the database
    $conn = new mysqli('localhost', 'root', '', 'feedback_college');

    // Check connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Bind number as a string ('s') if you're storing it as text in the DB
    $stmt = $conn->prepare("INSERT INTO contact (name, email, number, topic, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $number, $topic, $message);

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
