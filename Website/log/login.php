<?php    

    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "sign";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

      
    $email = $_POST['em'];  
    $password = $_POST['pass'];  
    
    $um="select username from userdetail where email='$email'";
    $umres= mysqli_query($con,$um);
    $row=mysqli_fetch_assoc($umres);
    $u=$row['username'];
      
        $sql = "select *from userdetail where email = '$email' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            $_SESSION['usernam']=$u;
            header("location:index.php");
        }  
        else{  
            header("location:error.html");  
        }     
?>  