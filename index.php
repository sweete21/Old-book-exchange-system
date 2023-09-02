<?php
// index.php
session_start();
$expiration_time = 3600;

if (isset($_SESSION['username'])) {
    // The user is logged in
    $username = $_SESSION['username'];
    $isLoggedIn = true;
} else {
    // The user is NOT logged in
    $username= "user";
    $isLoggedIn = false;
}

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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Book Exchange</title>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    .box1{
      
      display: inline-block;
      width: 40%;
      float: left;
      border: 1px solid #000; /* Add a border with 2px width and black color (#000) */
      background-color: white; /* Set the background color of the div */
      box-sizing: border-box;
      margin-right: 30px; 
      padding: 15px;
      margin-bottom: 20px;
  
    }
    .box2{
   
     display: inline-block;
     justify-content: space-between;
     width: 40%;
     float: left;
     border: 1px solid #000; /* Add a border with 2px width and black color (#000) */
     background-color: white; /* Set the background color of the div */
     box-sizing: border-box;
     padding: 15px;
     margin-bottom: 20px;
 
   }
    .rowee {
   
    display: flex;
    justify-content: center;
    align-items: center;
    background: #E5E4E2;
    padding: 15px;
    padding-left: 120px;
    padding-right: 20px; 
    width: 70%;
    margin-left: 230px;
    
    }
    .blue-button {
    background-color: #728FCE; /* Set the background color to blue */
    color: white; /* Set the text color to white to improve visibility */
    padding: 2px; /* Adjust the padding as needed to create the desired button size */
    border: none; /* Remove the default button border */
    border-radius: 3px; /* Optional: Add some border-radius to create rounded corners */
    cursor: pointer; /* Show a pointer cursor when hovering over the button */
    
    }
  </style>
</head>
  <body>
  <?php if (!$isLoggedIn) : ?>
    <!--dropdown-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <img src="images/favi.png" alt="bla bla bla">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href=#> Welcome  <?php echo $username; ?> ! <a>
        </li> 
      </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signIn.php">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>  

        </ul>
      </div>
    </nav>
  <?php else : ?>
      <!--dropdown-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <img src="images/favi.png" alt="bla bla bla">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href=#> Welcome  <?php echo $username; ?> ! <a>
        </li> 
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out<a>
          </li>   

        </ul>
      </div>
    </nav>
  <?php endif; ?>

  <!-- Add your page content here -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--carosouel-->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/nss1.jpeg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="images/nss2.jpeg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>   
      </div>  
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div> 
<br>
<br>

<!--give-take frame-->
<div class="rowee" >
  <form method="post" action="checkBook.php" onsubmit="return validateForm()">
    <div class="box1"  >
          <h5 class="title">Give Book</h5>
          <p class="text">
          <label for="aname">Subject</label><br>
          <input type="text" id="give_sub" name="give_sub"><br><br>
          <label for="aname">Book Title </label><br>
          <input type="text" id="give_title" name="give_title"><br><br>
          <label for="aname">Author</label><br>
          <input type="text" id="give_author" name="give_author"><br><br>
          <label for="aname">Edition</label><br>
          <input type="number" id="give_edition" name="give_edition"><br><br>
          </p>
    </div>
    <div class="box2" >
          <h5 class="title">Take Book</h5>
          <p class="text">
          <label for="aname">Subject</label><br>
          <input type="text" id="take_sub" name="take_sub"><br><br>
          <label for="aname">Book Title </label><br>
          <input type="text" id="take_title" name="take_title"><br><br>
          <label for="aname">Author</label><br>
          <input type="text" id="take_author" name="take_author"><br><br>
          <label for="aname">Edition</label><br>
          <input type="number" id="take_edition" name="take_edition"><br><br>
          </p>
    </div>
    <div class="btn">
        <input type="submit" value="Exchange" class="blue-button">
    </div>
  </form>
</div>
<script>
        function validateForm() {
            // Get form field values
            var give_sub = document.getElementById("give_sub").value;
            var give_title = document.getElementById("give_title").value;
            var give_author = document.getElementById("give_author").value;
            var give_edition= document.getElementById("give_edition").value;

            var take_sub = document.getElementById("take_sub").value;
            var take_title = document.getElementById("take_title").value;
            var take_author = document.getElementById("take_author").value;
            var take_edition = document.getElementById("take_edition").value;
            // Perform validation
            if (give_sub.trim() === "" || give_title.trim() === "" || give_author.trim() === "" || give_edition.trim() === "" || 
                take_sub.trim() === "" || take_title.trim() === "" || take_author.trim() === "" || take_edition.trim() === "") {
                alert("Please fill in all fields.");
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
  </script>


 <!-- about us page -->
 <section id="aboutus">
 <div class="about">
          <div class="py-5" >
            <h3 class="text-centre">About This Scheme</h3>
          </div>
        <div class="cointainer-fluid"></div>
          <div class="row">
             <div class="col-lg-6 col-md-6 col-12">
              <img src="images/mybbok.jpg" class="img-fluid ">
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                 <p class="para">
                  This is the scheme presented by NSS gehu giving you an opportunity 
                  to help reading enthusiast like you...you can exchange any of your book
                  rather then selling them in vain in order to be a helper...!
                  <br>
                  <br>
                  <br>
                  <br>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  Architecto atque a culpa earum voluptas error magni exercitationem ut deleniti.
                  Vero eos quo obcaecati laudantium possimus. Id placeat iure quam error.
                  <br>
                  This is a free book exchange scheme .....
                  <br>
                  
                 </p>
          
             </div>
          </div>
        </div>
  </div>
  </section>

    <!--footer-->
    <footer class="myfooter">
      <div class="cointainer">
        <div class="row">
          <div class="footer-col">
            <h4>G.E.H.U</h4>
            <ul>
              <li><a href="#">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Our Community</a></li>
              </a></li>
            </ul>
          </div>
          
          <div class="footer-col">
            <h4>Get Help</h4>
            <ul>
              <li><a href="#">Contact us </a></li>
              <li><a href="#">Ask question</a></li>
              <li><a href="#">helpline:123456789</a></li>

          </div>

          <div class="footer-col">
            <h4>follow us</h4>
             <div class="social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>  
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
