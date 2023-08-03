<?php

session_start();
$expiration_time = 3600;
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "registration";

$firstname="";
$lastname="";
$mobile="";
$email="";
$password="";

// Create a connection to the MySQL database
$conn = mysqli_connect("localhost", "root", "", "registration");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the form data from the $_POST superglobal variable
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['pass'];

// Insert the form data into the MySQL database
$sql = "INSERT INTO register (firstname, lastname, mobile, email, pass) VALUES ('$firstname', '$lastname', '$mobile', '$email', '$password')";

$user=$firstname.' '.$lastname;

$_SESSION['username'] = $user;
header("Location: index.php");

 if (mysqli_query($conn, $sql)) {
     header("Location:login.php");
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//login form database connection
header("Location: index.php");
?>
