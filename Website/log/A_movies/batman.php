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
            <img src="../mov2.jpg" alt="poster" width="320" height="420" class="img1">
        </div>
        <div class="maind">
            <h1 class="movname">The Dark Knight (2008)</h1><br>
            <h3>Genres- Action, Crime, Drama</h3><br>
            <h3>Running Time- 2h 32min</h3><br>
            <h3>Language- English</h3><br>
            <h3>Country- USA</h3><br>
            <h3>&#11088&nbsp;9.0/10</h3><br>
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
            When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of
            the greatest psychological and physical tests of his ability to fight injustice
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
            <iframe width="400" height="250" src="https://www.youtube.com/embed/EXeTwQWrcwY"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/jane6C4rIwc"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/TQfATDZY5Y4"></iframe>
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
            <h3>
                <b class="crew-link" id="22" data-toggle="popover">Christopher Nolan</b>,&nbsp;&nbsp;</h3><br>
            <h3 class="title">Written By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="23"> Jonathan Nolan</b>,&nbsp;&nbsp;
                <b class="crew-link"data-toggle="popover" id="22">Christopher Nolan</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Produced By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="22">Christopher Nolan</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="24">Charles Roven</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="25">Emma Thomas</b></h3><br>
            <h3 class="title">Edited By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="26">Lee Smith</b>&nbsp;&nbsp;</h3><br>

            <h3 class="title">Cast(Top Billing)-</h3>
            <h3><br> <span class="actors">
                <b class="crew-link" data-toggle="popover" id="27">Christian Bale</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="28">Heath Ledger</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="29">Aaron Eckhart</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="30">Michael Caine</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="31">Maggie Gyllenhaal</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="32">Gary Oldman</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="33">Morgan Freeman</b>&nbsp;&nbsp;
                
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
            Best Performance by an Actor in a Supporting Role-Heath Ledger<br>
            <br>Best Performance by an Actor in a Supporting Role in a Motion Picture-Heath Ledger<br>
            <br>Best Action/Adventure/Thriller Film<br>
            <br>Best Writing-Christopher Nolan,Jonathan Nolan<br>
            <br>Best Actor-Christian Bale<br>
            <br>Best Actress-Maggie Gyllenhaal<br>
            <br>Best Director-Christopher Nolan<br>
            
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
            <a href=""><img class="slogo" src=""
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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        