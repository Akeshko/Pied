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
            <img src="https://m.media-amazon.com/images/M/MV5BMDMwOTgyNzYtNWI2Zi00MDcwLWEyNmUtMGQ5YzA3ZTljMTA2XkEyXkFqcGdeQXVyNjU2ODM5MjU@._V1_UY1200_CR99,0,630,1200_AL_.jpg" alt="poster" width="320" height="420" class="img1">
        </div>
        <div class="maind">
            <h1 class="movname">Maniac(2018)</h1><br>
            <h3>Genres- Drama, Comedy, Sci-Fi</h3><br>
            <h3>Running Time- 40min(x 10)</h3><br>
            <h3>Language- English</h3><br>
            <h3>Country- US</h3><br>
            <h3>&#11088&nbsp;7.8/10</h3><br>
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
            Annie Landsberg and Owen Milgrim are two strangers who are drawn to the late stages of a mysterious pharmaceutical trial. Each has a different reason for participating in the experiment -- she is disaffected and aimless, fixated on broken relationships with her mother and sister, while he has struggled throughout his life with a disputed diagnosis of schizophrenia. The radical treatment, using pills that the inventor claims can repair anything about the mind, draws Annie, Owen and 10 other subjects into a three-day drug trial that they're told will permanently solve all of their problems, with no complications or side effects. Unfortunately, things don't go as planned.
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
            <iframe width="400" height="250" src="https://www.youtube.com/embed/dQZPp5ED1VI"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/gzjD65c_8wU"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/X06xumQaOdo"></iframe>
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
            <h3 class="title">Directed By-</h3><h3><b class="crew-link"  id="87" data-toggle="popover" >Cary Joji Fukunaga</b>,&nbsp;&nbsp;</h3><br>
            <h3 class="title">Written By- </h3><h3><b class="crew-link" id="87" data-toggle="popover" >Cary Joji Fukunaga</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Produced By- </h3><h3><b class="crew-link" id="87" data-toggle="popover" >Cary Joji Fukunaga</b>&nbsp;&nbsp;</h3><br>

            <h3 class="title">Cast(Top Billing)-</h3><h3><br> <span class="actors">
            <b class="crew-link" id="88" data-toggle="popover" >Jonah Hill</b>&nbsp;&nbsp;
             <b class="crew-link" id="89" data-toggle="popover" >Emma Stone</b>&nbsp;&nbsp;
            
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
            Golden Trailer Award for Most Original TV Trailer
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
            <a href="https://www.netflix.com/watch/80124522?trackId=13752289&tctx=0%2C1%2Cf5a2fb6bfa755d74ad500e9b14f6ad0a4b50231e%3A24b24ec802cb4546571107212c4d0cb7bcf417c8%2Cf5a2fb6bfa755d74ad500e9b14f6ad0a4b50231e%3A24b24ec802cb4546571107212c4d0cb7bcf417c8%2Cunknown%2C"><img class="slogo" src="netflixlogo.png"
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