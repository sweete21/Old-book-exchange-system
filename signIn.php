<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      
      <form action="createUser.php" method="post"> 
    
        <div class="firstname">
                <div class="fname">
                    <label for="fname">First Name:</label>
                    <br>
                    <input type="text" id="fname" name="firstname" pattern="^[a-zA-Z-]{2,}$"  required/>
                </div>
    
        </div>
        <div class="lastname">
            <div class="lname">
                <label for="lname">Last Name:</label>
                <br>
                <input type="text" id="lname" name="lastname" pattern="^[a-zA-Z-]{2,}$"  required/>
            </div>
           
        </div>
        <div class="number">
            <div class="num">
                <label for="mobile">Mobile:</label>
                <br>
                <input type="tel" id="mobile" name="mobile" required/>
            </div>

        </div>

        <div>
          <label for="exampleInputEmail1" class="form-label">Email address:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
          required/>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div >
          <label for="exampleInputPassword1" class="form-label">Choose Password</label>
          <input type="password" class="form-control" name="pass"  autofocus="" autocapitalize="none" autocomplete="username"  id="id_username"required/>

        </div>

        

        <button type="submit" class="sub_btn" name="button">Submit</button>
        <br>
        <br>
        already have an account?<a href="login.php">Login</a>
    
      </form>

    </div>


   