<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PiedPiper:the ultimate database</title>
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/popper.js/1.11.0/umd/popper.min.js" ></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="aseperation.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/c184c24105.js" crossorigin="anonymous"></script>
    
   
   
    
    <link rel="stylesheet" href="font-awesome.css" />
    <script src="popo.js"></script>
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
            echo "<li> <a class='nav-link' href='../index.php'>Home</a></li>";
            echo   " <li> <a class='nav-link' href='../A_movies/movmain.php'>Movies</a></li>";
            echo "   <li> <a class='nav-link' href='tvmain.php'>TV Shows</a></li>";
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
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/14/The_Last_Dance_2020.jpg/250px-The_Last_Dance_2020.jpg" alt="poster" width="320" height="420" class="img1">
        </div>
        <div class="maind">
            <h1 class="movname">The Last Dance(2020) </h1><br>
            <h3>Genres- Documentary, Biography</h3><br>
            <h3>Running Time- 8h 11min</h3><br>
            <h3>Language- English</h3><br>
            <h3>Country- US</h3><br>
            <h3>&#11088&nbsp;9.1/10</h3><br>
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
            In the fall of 1997, Michael Jordan and the Chicago Bulls allowed a film crew to follow them as they went for their sixth NBA title in eight seasons. That resulted in a stunning portrait of one of the sport's most iconic athletes and a celebrated team. "The Last Dance" follows the Bulls' 1997-98 season from start to finish, while also covering the rest of the chapters in Jordan's remarkable career. The 10-part docuseries follows the Jordan timeline from when he was an emerging star on his high school team to becoming a worldwide marketing force and cultural figure. The series takes its name from a phrase coined by then-Bulls coach Phil Jackson, who knew that the season would likely be the final run for the core members of that 1990s Bulls dynasty.
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
            <iframe width="400" height="250" src="https://www.youtube.com/embed/N9Z9JtNcCWY"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/Peh9Yqf1GXc"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/JQk2hJs2ToA"></iframe>
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
            <div class="names">
            <h3 class="title">Directed By-</h3><h3><b class="crew-link"  id="80" data-toggle="popover" >Jason Hehir</b>,&nbsp;&nbsp;</h3><br>
            <h3 class="title">Written By- </h3><h3><b class="crew-link" id="" data-toggle="popover" >-</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Produced By- </h3><h3><b class="crew-link" id="81" data-toggle="popover" >Nina Krstic</b>&nbsp;&nbsp;</h3><br>

            <h3 class="title">Cast(Top Billing)-</h3><h3><br> <span class="actors">
            <b class="crew-link" id="82" data-toggle="popover" >Phil Jackson</b>&nbsp;&nbsp;
             <b class="crew-link" id="83" data-toggle="popover" >Michael Jordan</b>&nbsp;&nbsp;
             
            
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
            Golden Globe for Best Television Limited Series <br><br>Golden Globe for Best Perfomance by an Actor in a Supporting Role in a Series - Stellan Skarsgard<br><br>BAFTA TV Award for Mini-Series<br><br>BAFTA TV Award for Leading Actor - Jared Harris<br><br>
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
            <a href="https://www.netflix.com/watch/80203144?trackId=13752289&tctx=0%2C1%2Cc1b9b2a6ddadc281cb21e9940340e908cbb9329d%3A75a607ca58318f9a45278a167bbe67c973b3ad19%2Cc1b9b2a6ddadc281cb21e9940340e908cbb9329d%3A75a607ca58318f9a45278a167bbe67c973b3ad19%2Cunknown%2C"><img class="slogo" src="netflixlogo.png"
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
        <p class="botimg">an <img src="logo2.png" alt="logo2"> </img>company</p>
        <pre style="text-align:center">© 1990-2020 by PiedPiper.com, Inc.<pre>
    </footer>
    
</body>
</html>