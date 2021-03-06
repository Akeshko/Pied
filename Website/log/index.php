<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>PiedPiper:the ultimate database</title>
    <link rel="stylesheet" type="text/css" href="stylesheet1.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src ="https://kit.fontawesome.com/c184c24105.js" crossorigin="anonymous"></script>


    <link rel="icon" href="logo.png" type="image/icon type">
</head>
<body>
  <section class="showcase">
    <header>
        <div class="logo-container">
            <img src="logo.png" alt="logo" />
            <h4 class="logo">Pied Piper</h4>
        </div>
        
        <nav>
       
           <ul class="nav-links">
             
            
            <?php
            if(isset($_SESSION['usernam'])){
            echo "<li> <a class='nav-link' href='index.php'>Home</a></li>";
            echo   " <li> <a class='nav-link' href='A_movies/movmain.php'>Movies</a></li>";
            echo "   <li> <a class='nav-link' href='Movies/tvmain.php'>TV Shows</a></li>";
            }
            else{
            /*echo   " <li> <a class='nav-link' href=''>Movie</a></li>";
            echo "   <li> <a class='nav-link' href=''>TV Shows</a></li>";*/
             echo "<li> <a class='nav-link' href='aboutus.html'>About Us</a></li>";
            }
            ?>
            </ul>
        
        </nav>
        <div>
         <?php
            if(isset($_SESSION['usernam'])){
                echo"<b style='color:white;'>Hello, ".$_SESSION['usernam']."! </b>";
          echo"<a href='logout.php' ><button type='button' class='btn1'>Log out</button></a>";
            }
            else{
             echo  "<a href='signup.html' ><button type='button' class='btn1'>Sign In</button></a>";
            }
            ?>
        </div>
        
    </header>
    <div class="tpcontent">
    <?php
        if(isset($_SESSION['usernam'])){
      echo "<h2 class='tp'>Welcome ".$_SESSION['usernam']."...</h2>";
      echo "<a href='2b.php' class='btn2'>Have an opinion on any movie or tv show<i class='fa fa-sign-in' aria-hidden='true'></i></a>";
        }
        else{
            echo "<h2 class='tp'>Ratings and Where to Watch</h2>";
      echo "<a href='signup.html' class='btn2'>Sign In to view Movies and TV Shows<i class='fa fa-sign-in' aria-hidden='true'></i></a>";
        }
        ?>
    </div>

  </section>
  <hr>

  <section class="movies">

    <p class="movie-title">Most Popular Movies</p>
    <div class="Movies-img">

        <figure>
            <a href="Movies/aepage.html">    
          <img src="mov1.jpg" alt="poster" width="190" height="260" class="img1">
                <a href="A_movies/Moviie.php"><figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>8.4<br>Avengers:Endgame<br></a><p style="color:rgb(104,104,104)">(2019)</p></figcaption></a>
        </figure>
        <figure>
          <a href="A_movies/batman.php"><img src="mov2.jpg" alt="poster" width="190" height="260" >
              <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>9.0<br>Batman:The Dark Night<br><p style="color:rgb(104,104,104)">(2008)</p></figcaption></a>
        </figure>
        <figure>
          <img src="mov3.jpg" alt="poster" width="190" height="260" >
            <a href="A_movies/interstellar.php"><figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>8.6<br>Interstellar<br><p style="color:rgb(104,104,104)">(2014)</p></figcaption></a>
        </figure>
        <figure>
          <img src="mov4.jpg" alt="poster" width="190" height="260" >
            <a href="A_movies/deadpool2.php"><figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>7.7<br>Deadpool 2<br><p style="color:rgb(104,104,104)">(2018)</p></figcaption></a>
        </figure>
        <figure>
          <a href="A_movies/shining.php"><img src="mov5.jpg" alt="poster" width="190" height="260" >
              <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>8.4<br>The Shining<br><p style="color:rgb(104,104,104)">(1980)</p></figcaption></a>
        </figure>
        <figure>
          <img src="mov6.jpg" alt="poster" width="190" height="260" >
            <a href="A_movies/wwz.php"><figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>7.0<br>World War Z<br><p style="color:rgb(104,104,104)">(2013)</p></figcaption></a>
        </figure>
     </div>
</section>
<hr>

<section class="tv-shows">

  <p class="tv-title">Most Popular TV Shows</p>
  <div class="tv-img">

      <figure>
        <img src="tv1.jpg" alt="poster" width="190" height="260" >
        <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>8.9<br>The Office<br><p style="color:rgb(104,104,104)">(2005)</p></figcaption>
      </figure>
      <figure>
        <img src="tv2.jpg" alt="poster" width="190" height="260" >
        <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>8.8<br>Peaky Blinders<br><p style="color:rgb(104,104,104)">(2013)</p></figcaption>
      </figure>
      <figure>
        <img src="tv3.jpg" alt="poster" width="190" height="260" >
        <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>8.4<br>Big Bang Theory<br><p style="color:rgb(104,104,104)">(2019)</p></figcaption>
      </figure>
      <figure>
        <img src="tv4.jpg" alt="poster" width="190" height="260" >
        <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>9.1<br>Sherlock<br><p style="color:rgb(104,104,104)">(2010)</p></figcaption>
      </figure>
      <figure>
        <img src="tv5.jpg" alt="poster" width="190" height="260" >
        <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>9.5<br>Breaking Bad<br><p style="color:rgb(104,104,104)">(2008)</p></figcaption>
      </figure>
      <figure>
        <img src="tv6.jpg" alt="poster" width="190" height="260" >
        <figcaption class="movie-name"><i class="fa fa-star" aria-hidden="true"></i>8.2<br>The Witcher<br><p style="color:rgb(104,104,104)">(2019)</p></figcaption>
      </figure>
   </div>
</section>
<hr>
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
<a href="2b.php" class="bottext1">Contact Us</a>

<p class="botimg">an <img src="logo2.png" alt="logo2">  </img>company</p>
</p>
<pre style="text-align:center">?? 1990-2020 by PiedPiper.com, Inc.<pre>
</footer>
</body>
</html>
