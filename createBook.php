<?php

$servername = "localhost";
$username = "root";
$password = "password";
$databasename = "registration";

$connection=mysqli_connect($servername,$username,$password,$databasename);

if(!$connection){
    echo "sorry!!!";
}
    

    else{   
    $gsub=$_POST['give_sub'];
    $gtitle=$_POST['give_title'];
    $gauthor=$_POST['give_author'];
    $gedition=$_POST['give_edition'];

    $sql = "INSERT INTO book (subject,name,author,edition) VALUES ('$gsub','$gtitle','$gauthor'$gedition')";

 
}

?>