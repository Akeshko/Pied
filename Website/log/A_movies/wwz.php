<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PiedPiper:the ultimate database</title>
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="movstyle.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/c184c24105.js" crossorigin="anonymous"></script>




    <link rel="stylesheet" href="font-awesome.css" />
    <script src="popoa.js"></script>
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

    <div class="gap">
        <br><br>
    </div>

    <section class="main">
        <div class="poster">
            <img src="../mov6.jpg" alt="poster" width="320" height="420" class="img1">
        </div>
        <div class="maind">
            <h1 class="movname">World War Z (2013)</h1><br>
            <h3>Genres- Action, Adventure, Horror</h3><br>
            <h3>Running Time-1h 56min</h3><br>
            <h3>Language- English</h3><br>
            <h3>Country- USA</h3><br>
            <h3>&#11088&nbsp;7.0/10</h3><br>
        </div>
    </section>
    <div class="gap">
        <br><br>
    </div>

    <section class="synopsis">
        <div class="ttext">
            <h2>Synopsis</h2>
        </div>
        <div class="sytext">
            Former United Nations employee Gerry Lane traverses the world in a race against time to stop a zombie pandemic that is toppling armies and governments and threatens to destroy humanity itself.
        </div>
    </section>

    <div class="gap">
        <br><br>
    </div>

    <section class="trailer">
        <div class="ttext">
            <h2>Videos</h2>
        </div>
        <div class="trailers">
            <iframe width="400" height="250" src="https://www.youtube.com/embed/HcwTxRuq-uk"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/Dwem_D09yow"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/uU0DNCV22dU"></iframe>
        </div>
    </section>

    <div class="gap">
        <br><br>
    </div>

    <section class="candc">
        <div class="ttext">
            <h2 style="color:turquoise">Cast and Crew</h2>
        </div>
        <div class="names">
            <h3 class="title">Directed By-</h3>
            <h3><b class="crew-link" id="0" data-toggle="popover">Marc Forster</b>,&nbsp;&nbsp;</h3><br>
            <h3 class="title">Written By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="2">Matthew Michael Carnahan</b>,&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="3"> Drew Goddard</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Produced By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="4">Brad Pitt</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="4"> Dede Gardner</b>
                <b class="crew-link" data-toggle="popover" id="4">Jeremy Kleiner</b></h3><br>
            <h3 class="title">Edited By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="5">Roger Barton</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="5">Matt Chessé</b>
                
            </h3><br>

            <h3 class="title">Cast(Top Billing)-</h3>
            <h3><br> <span class="actors">
                <b class="crew-link" data-toggle="popover" id="7">Brad Pitt</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="8">Mireille Enos</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="9">Daniella Kertesz</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="10">James Badge Dale</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="11">Ludi Boeken</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="12">Matthew Fox</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="13">Fana Mokoena</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="13">David Morse</b>
                <b class="crew-link" data-toggle="popover" id="13">Elyes Gabel</b>
                <b class="crew-link" data-toggle="popover" id="13">Peter Capaldi</b> 
                  </span></h3>
        </div>
    </section>

    <div class="gap">
        <br><br>
    </div>

    <section class="aandn">
        <div class="ttext">
            <h2 style="color: turquoise;">Awards</h2>
        </div>
        <div class="awards">
            Best Actor-Brad Pitt<br>
            <br>Best Thriller Film<br>
            <br>Top Box Office Films-Marco Beltrami<br>
            <br>Best Sci-Fi/Horror Movie<br>
            <br>Best Actor in an Action Movie-Brad Pitt<br>
            <br>Best Trailer - International Competition<br>
            
            
            
        </div>
    </section>

    <div class="gap">
        <br><br>
    </div>

    <section class="streaming">
        <div class="ttext">
            <h2>Streaming Services</h2>
        </div>
        <div class="stext">
            <a href="https://www.netflix.com/watch/70262639?trackId=13752289&tctx=0%2C2%2C0b98cf0e18314c13554a98b5b25a31e9aad9e157%3A4441a016a9c888395ca9681ed709f649c529b6e6%2C0b98cf0e18314c13554a98b5b25a31e9aad9e157%3A4441a016a9c888395ca9681ed709f649c529b6e6%2C%2C"><img class="slogo" src="../Movies/netflixlogo.png"
                    width="100" height="80" alt="b"></a>

        </div>
    </section>

    <div class="gap">
        <br><br>
    </div>

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
            <a href="#" class="bottext1">Sign In</a>
            <br>
            <br>
           <a href="../2b.php" class="bottext1">Contact Us</a>
        </p>
        <p class="botimg">an <img src="../logo2.png" alt="logo2"> </img>company</p>
        <pre style="text-align:center">© 1990-2020 by PiedPiper.com, Inc.<pre>
    </footer>
    
</body>
</html>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        