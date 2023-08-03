<?php

if (isset($_GET['alert'])) {
    $alertMessage = $_GET['alert'];

    // Echo a JavaScript script block to display the alert
    echo '<script>alert("' . $alertMessage . '");</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
   <script src="form1.js"></script>
   


</head>
<body>


  <!-- navbar    -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">About Us</a>
            </li>
          </ul>        
        </div>
  </nav>


  <!-- background --> 
  <div class="main" style="position:relative;">

        <img src="images/campus.jpg" alt="universityimage" width="1550" height="650">
        <div class="main1">Exchange Your Books now!!!</div>

  </div>


<!-- //form -->
<div class="form_box">
      
      <form action="verifyUser.php" method="post"> 
    
        <div class="Username">
                <div class="username">
                    <label for="Username">Email:</label>
                    <br>
                    <input type="text" id="email" name="email" required/>
                </div>
        </div>

        <div class="Password">
            <div class="password">
                <label for="password">Password:</label>
                <br>
                <input type="text" id="password" name="password" required/>
            </div>

        <button type="submit" class="sub_btn" name="button">Login</button>
        <br>
        <br>
           
      </form>

    </div>

  

    
 
    


