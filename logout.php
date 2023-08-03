<?php
// Start the session (if not already started)
session_start();

session_unset(); 
session_destroy(); 

$sucess="Logged out sucessfully !";
header("Location: index.php?alert=" . urlencode($sucess));
exit();
?>
