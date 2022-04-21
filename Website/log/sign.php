<?php
$servername = "localhost";
$database = "sign";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$nm=$_POST['name1'];
$eml=$_POST['email1'];
$passwrd=$_POST['password1'];


$user_check_query = "SELECT * FROM userdetail WHERE email='$eml' LIMIT 1";
  $result1= mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result1);

  if (isset($user['email'])) {   
      header("location:error1.html");   
  } 
      else { 
          $sql1="INSERT INTO userdetail (username,email,pass) VALUES ('$nm','$eml','$passwrd')";
            if (mysqli_query($conn, $sql1)) {
                header("location:signup.html");
            } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            } 
      }
      

mysqli_close($conn);
?>