<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>PiedPiper:the ultimate database</title>
    <link rel="stylesheet" href="stylesheet1a.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src ="https://kit.fontawesome.com/c184c24105.js" crossorigin="anonymous"></script>


    <link rel="icon" href="logo.png" type="image/icon type">
</head>
<body>
  <section class="showcase">
    <header>
        <div class="logo-container">
            <img src="../logo.png" alt="logo" />
            <h4 class="logo">Pied Piper</h4>
        </div>
        <nav>
       
           <ul class="nav-links">
             
            
            <?php
            if(isset($_SESSION['usernam'])){
            echo "<li> <a class='nav-link' href='../index.php'>Home</a></li>";
            echo   " <li> <a class='nav-link' href='movmain.php'>Movies</a></li>";
            echo "   <li> <a class='nav-link' href='../Movies/tvmain.php'>TV Shows</a></li>";
            }
            else{
            /*echo   " <li> <a class='nav-link' href=''>Movie</a></li>";
            echo "   <li> <a class='nav-link' href=''>TV Shows</a></li>";*/
            
            }
            ?>
            </ul>
        
        </nav>
        <div>
         <?php
            if(isset($_SESSION['usernam'])){
                echo"<b style='color:white;'>Hello, ".$_SESSION['usernam']."! </b>";
          echo"<a href='../logout.php' ><button type='button' class='btn1'>Log out</button></a>";
            }
            else{
             echo  "<a href='../signup.html' ><button type='button' class='btn1'>Sign In</button></a>";
            }
            ?>
        </div>
    </header>
    </section>
    <h3></h3>
    <div id="mogrid" class="gr">MOVIES</div>

    <footer>
  <p class="icons">
  <i class="fa fa-facebook-square fa-lg icon" aria-hidden="true"></i>
  <i class="fa fa-instagram fa-lg icon" aria-hidden="true"></i>
  <i class="fa fa-twitch fa-lg icon" aria-hidden="true"></i>
  <i class="fa fa-twitter fa-lg icon" aria-hidden="true"></i>
  <i class="fa fa-youtube-play fa-lg icon" aria-hidden="true"></i>
</p>
<p class="bottext">
<a href="#" class="bottext1">Home</a>
<a href="#" class="bottext1">Movies</a>
<a href="#" class="bottext1">Tv Shows</a>
<a href="signup.html" class="bottext1">Sign In</a>
<br>
<br>
<a href="../2b.php" class="bottext1">Contact Us</a>

<p class="botimg">an <img src="logo2.png" alt="logo2">  </img>company</p>
</p>
<pre style="text-align:center">© 1990-2020 by PiedPiper.com, Inc.<pre>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script src="movj.js"></script>
</body>
</html>