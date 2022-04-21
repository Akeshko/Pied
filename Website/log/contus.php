<?php
$servername = "localhost";
$database = "contact";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);



$nm=$_POST['name'];
$eml=$_POST['emailid'];
$issuw=$_POST['issuses'];
$issu=$_POST['nameis'];
$msgg=$_POST['message'];



$sql1="INSERT INTO userus (username,email,issue_with,issue,msg) VALUES ('$nm','$eml','$issuw','$issu','$msgg')";
if (mysqli_query($conn, $sql1)) {
   include 'index.php';
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
?>