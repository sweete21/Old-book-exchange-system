<?php
session_start();
$expiration_time = 3600;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $pswd = "password";
    $dbname = "registration";

    //alert msgs
    $invalidPassword='Invalid password';
    $fail='User does not exist';
    
    // Create a new MySQLi object
    $conn = mysqli_connect("localhost", "root", "", "registration");
    
    // Check the connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    
    // Prepare the query
    $query = "SELECT * FROM register WHERE email = ?";
    $stmt = $conn->prepare($query);
    
    // Bind the parameter and execute the query
    $stmt->bind_param('s', $email);
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    
    if ($result->num_rows === 1) {
        // User exists, check the password
        $row = $result->fetch_assoc();
        $storedPassword = $row['pass'];
        
        // Verify the password
        if ($password=== $storedPassword) {
            // Successful login

        
            $user=$row['firstname'].' '.$row['lastname'];


            // Store the username in a session variable
            $_SESSION['username'] = $user;
            header("Location: index.php");
            
        } else {
            // Invalid password
            header("Location: login.php?alert=" . urlencode($invalidPassword));
            
        
        }
    } else {
        // User does not exist
            header("Location: login.php?alert=" . urlencode($fail));
        
    }
    
    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
