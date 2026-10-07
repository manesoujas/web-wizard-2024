<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $User = $_POST['User'];
    $password = $_POST['password'];

    // Create a connection to the database
    $conn = new mysqli('localhost', 'root', '', 'feedback');

    // Check connection
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    // Prepare the SQL statement to check both User and password
    $stmt = $conn->prepare("SELECT * FROM teacher1 WHERE User = ? AND password = ?");
    
    // Bind parameters (both are strings, so we use "ss")
    $stmt->bind_param("ss", $User, $password);
    
    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Check if any user was found
    if ($result->num_rows > 0) {
        // Fetch the user details
        $user = $result->fetch_assoc();
        
        // Compare password (optional, if already checked in SQL query)
        if ($user['password'] === $password) {
            // Redirect to dashboard if login is successful
            header("Location: dashboard.html");
            exit();
        } else {
            echo "Invalid Username or Password.";
        }
    } else {
        echo "Invalid Username or Password.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
