<?php
session_start();
$expiration_time = 3600;

$alertMessage = "Please log in before submitting the form.";

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "registration";

function generateRandomNumber() {
  $min = 1000; // Minimum 4-digit number (inclusive)
  $max = 9999; // Maximum 4-digit number (inclusive)

  // Generate a random number between $min and $max (inclusive)
  $randomNumber = random_int($min, $max);

  return $randomNumber;
}

// Check if the user is logged in
if (isset($_SESSION['username'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password

    $give_sub=$_POST['give_sub'];
    $give_title=$_POST['give_title'];
    $give_author=$_POST['give_author'];
    $give_edition=$_POST['give_edition'];

    $take_sub=$_POST['take_sub'];
    $take_title=$_POST['take_title'];
    $take_author=$_POST['take_author'];
    $take_edition=$_POST['take_edition'];
    
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $pswd = "password";
    $dbname = "registration";

    //alert msgs
    $bookNotFound='Sorry, we dont have that book.';
    $error='There is some error in exchanging your book';
    
    // Create a new MySQLi object
    $conn = mysqli_connect("localhost", "root", "", "registration");
    
    // Check the connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    
    // Prepare the query
    $query = "SELECT * FROM books WHERE subject = ? AND name= ? AND author=? AND edition=? ";
    $stmt = $conn->prepare($query);
    
    // Bind the parameter and execute the query
    $stmt->bind_param('sssi',$take_sub,$take_title,$take_author,$take_edition);
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    
    if ($result->num_rows >= 1) {

        $row = $result->fetch_assoc();
        $idToDelete = $row['book_id'];
        $sql = "DELETE FROM books WHERE book_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $idToDelete);
        

        if ($stmt->execute()) {
          
          //insert the book to be exchanged for
          $bookId=generateRandomNumber();
          
          $qry= "INSERT INTO books (book_id,subject,name,author,edition) VALUES (?,?,?,?,?)";
          $stmt2 = $conn->prepare($qry);
          $stmt2->bind_param("issss", $bookId,$give_sub,$give_title,$give_author,$give_edition);
          if($stmt2->execute())
            header("Location: exchange.php");
          else
            echo 'cant exchange!';
        } 
        else {
          header("Location: index.php".urldecode($error));
        }
        
            
        }  
    else {
      // Invalid password
      header("Location: index.php?alert=" . urlencode($bookNotFound));
    }
    // Close the statement and database connection
    $stmt->close();
    $conn->close();
  }
}
else {
  // User is not logged in, display an error message or redirect
  header("Location: index.php?alert=" . urlencode($alertMessage));
  exit;

}

?>



