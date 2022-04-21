<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="2bstyle.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/c184c24105.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="font-awesome.css" />
  <link rel="icon" href="logo.png" type="image/icon type">
  <title>Pied Piper</title>

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
  </section>
  <br>

  <section class="form-section" >
    <div class="column">
      <form onsubmit="return validate();" action="contus.php" method="post">
        <label for="name"> <span>Name</span>
          <i class="fa fa-check" aria-hidden="true"></i><i class="fa fa-exclamation" aria-hidden="true"></i>
        </label><small class="msg">Error Message</small>
        <input type="text" id="name" name="name" placeholder="Your Name..">

        <label for="email"><span>Email</span>
          <i class="fa fa-check" aria-hidden="true"></i><i class="fa fa-exclamation" aria-hidden="true"></i>
        </label><small class="msg">Error Message</small>
        <input type="text" id="email" name="emailid" placeholder="Your Email..">

        <label for="issuse"> Issue With </label>
        <select id="issuse" name="issuses">
          <option value="none">Nothing</option>
          <option value="movie">Movie</option>
          <option value="tv-show">Tv-Show</option>
          <option value="website">Website</option>
        </select>

        <label for="movtv"><span> Name of Movie/Series</span>
          <i class="fa fa-check" aria-hidden="true"></i><i class="fa fa-exclamation" aria-hidden="true"></i>
        </label><small class="msg">Error Message</small>
        <input type="text" id="movtv" name="nameis" placeholder="Name of Movie or Series..">

        <label for="message"> <span>Your Message</span>
          <i class="fa fa-check" aria-hidden="true"></i><i class="fa fa-exclamation" aria-hidden="true"></i>
        </label><small class="msg">Error Message</small>
        <textarea id="message" name="message" placeholder="Write your comments" style="height:170px"></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
  </section>
  <address>
    <p>Contect Info: 34656789</p>
    <p>E-mail:<a href="mailto:abc@example.com">abc@example.com</a>
  </address>

  <footer>
    <p class="icons">
      <i class="fa fa-facebook-square fa-lg icon" aria-hidden="true"></i>
      <i class="fa fa-instagram fa-lg icon" aria-hidden="true"></i>
      <i class="fa fa-twitch fa-lg icon" aria-hidden="true"></i>
      <i class="fa fa-twitter fa-lg icon" aria-hidden="true"></i>
      <i class="fa fa-youtube-play fa-lg icon" aria-hidden="true"></i>
    </p>
    <p class="bottext">
      <a href="index.html" class="bottext1">Home</a>
      <a href="Moviie.html" class="bottext1">Movies</a>
      <a href="#" class="bottext1">Tv Shows</a>
      <a href="signup.html" class="bottext1">Sign In</a>
      <br>
      <br>
      <a href="2b.html" class="bottext1">Contact Us</a>
    </p>
    <p class="botimg">an <img src="logo2.png" alt="logo2"> </img>company</p>
    <pre style="text-align:center">© 1990-2020 by PiedPiper.com, Inc.<pre>
    </footer>
    <script>
      function validate(){
      var name = document.getElementById("name");
      var movtv= document.getElementById("movtv");
      var email = document.getElementById("email");
      var msg = document.getElementById("message");

      if(name.value=="" || movtv.value=="" || email.value=="" || msg.value==""){
        alert("please Fill All Fields");
        return false;
      }

      var letters = /^[A-Za-z]+$/;

      if (name.value.match(letters)) {
        document.getElementsByClassName('fa-check')[0].style.visibility = 'visible';
        document.getElementsByClassName('fa-exclamation')[0].style.visibility = 'hidden';
      document.getElementsByClassName('msg')[0].style.visibility = 'hidden';
      } else {
        document.getElementsByClassName('fa-exclamation')[0].style.visibility = 'visible';
        document.getElementsByClassName('msg')[0].style.visibility = 'visible';
        document.getElementsByClassName('fa-check')[0].style.visibility = 'hidden';
    
        name.focus();
        return false;
      }


      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      if (email.value.match(mailformat)) {
        document.getElementsByClassName('fa-check')[1].style.visibility = 'visible';
        document.getElementsByClassName('fa-exclamation')[1].style.visibility = 'hidden';
      document.getElementsByClassName('msg')[1].style.visibility = 'hidden';

      } else {
        document.getElementsByClassName('fa-exclamation')[1].style.visibility = 'visible';
        document.getElementsByClassName('msg')[1].style.visibility = 'visible';
        document.getElementsByClassName('fa-check')[1].style.visibility = 'hidden';
        email.focus();
        return false;
      }

      var passcode = /^[0-9a-zA-Z]+$/;


      if (movtv.value.match(passcode)) {
         document.getElementsByClassName('fa-check')[2].style.visibility = 'visible';
        document.getElementsByClassName('fa-exclamation')[2].style.visibility = 'hidden';
      document.getElementsByClassName('msg')[2].style.visibility = 'hidden';
      } else {
        document.getElementsByClassName('fa-exclamation')[2].style.visibility = 'visible';
        document.getElementsByClassName('msg')[2].style.visibility = 'visible';
        document.getElementsByClassName('fa-check')[2].style.visibility = 'hidden';
    
      
        movtv.focus();
        return false;
      }

      var len=120;
      var ms=msg.value;
      if(ms.length<=len){
        document.getElementsByClassName('fa-check')[3].style.visibility = 'visible';
        document.getElementsByClassName('fa-exclamation')[3].style.visibility = 'hidden';
      document.getElementsByClassName('msg')[2].style.visibility = 'hidden';
      } else {
        document.getElementsByClassName('fa-exclamation')[3].style.visibility = 'visible';
        document.getElementsByClassName('msg')[3].style.visibility = 'visible';
        document.getElementsByClassName('fa-check')[3].style.visibility = 'hidden';
    
      
        msg.focus();
        return false;
      }

      

      }

    </script>
</body>
</html>