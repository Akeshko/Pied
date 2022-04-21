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
    <link rel="stylesheet" href="movstyle.css" />
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
            <img src="mov1.jpg" alt="poster" width="320" height="420" class="img1">
        </div>
        <div class="maind">
            <h1 class="movname">Avengers Endgame(2019)</h1><br>
            <h3>Genres- Action, Adventure, Drama</h3><br>
            <h3>Running Time- 3h 1min</h3><br>
            <h3>Language- English</h3><br>
            <h3>Country- USA</h3><br>
            <h3>&#11088&nbsp;8.4/10</h3><br>
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
            After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of
            remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to
            the universe.
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
            <iframe width="400" height="250" src="https://www.youtube.com/embed/TcMBFSGVi1c"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/KCSNFZKbhZE"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/0jNvJU52LvU"></iframe>
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
            <h3 class="title">Directed By-</h3><h3><b class="crew-link"  id="0" data-toggle="popover" >Joe&nbsp;&nbsp;Russo</b>,&nbsp;&nbsp;<b class="crew-link"
                data-toggle="popover" id="1">Anthony&nbsp;&nbsp;Russo</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Written By- </h3><h3><b class="crew-link" >Christopher Markus</b>,&nbsp;&nbsp;<b class="crew-link"
                    >Stephen McFeely</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Produced By- </h3><h3><b class="crew-link" >Kevin Fiege</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Edited By- </h3><h3><b class="crew-link" >Jeffrey Ford</b>&nbsp;&nbsp;<b class="crew-link"
                    >Matthew Schmidt</b>&nbsp;&nbsp;</h3><br>

            <h3 class="title">Cast(Top Billing)-</h3><h3><br> <span class="actors"><b class="crew-link" >Robert Downey
                        Jr</b>&nbsp;&nbsp;<b class="crew-link" >Chris Evans</b>&nbsp;&nbsp;<b class="crew-link"
                        >Mark Ruffalo</b>&nbsp;&nbsp;<b class="crew-link" >Chris
                        Hemsworth</b>&nbsp;&nbsp;<b class="crew-link" >Scarlett Johansson</b>&nbsp;&nbsp;<b
                        class="crew-link" >Don Cheadle</b>&nbsp;&nbsp;<b class="crew-link" >Jeremy
                        Renner</b>&nbsp;&nbsp;<b class="crew-link" >Paul Rudd</b>&nbsp;&nbsp;<b
                        class="crew-link" >Benedict Cumberbatch</b>&nbsp;&nbsp;<b class="crew-link"
                        >Chadwick<br> Boseman</b>&nbsp;&nbsp;<b class="crew-link" >Tom
                        Holland</b>&nbsp;&nbsp;<b class="crew-link" >Zoe Saldana</b>&nbsp;&nbsp;<b
                        class="crew-link" >Karen Gilian</b>&nbsp;&nbsp;<b class="crew-link" >Brie
                        Larson</b>&nbsp;&nbsp;<b class="crew-link" >Anthony Mackie</b>&nbsp;&nbsp;</span></h3>
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
            MTV Movie Award for Best Villain(2019) - Josh Brolin<br><br>Critics' Choice Movie Award for Best Action
            Movie<br><br>People's Choice Award for Favorite Movie<br><br>MTV Movie Award for Best Hero - Robert Downey,
            Jr.<br><br>Kids' Choice Award for Favorite Movie<br><br>People's Choice Award for Favorite Movie Actor -
            Robert Downey, Jr.<br><br>Teen Choice Award for Choice Movie Actor: Action/Adventure - Robert Downey,
            Jr.<br><br>Bandung Film Festival for Imported Film<br><br>Critics' Choice Movie Award for Best Visual
            Effects<br><br>Kids’ Choice Award for Favorite Superhero - Tom Holland<br><br>Teen Choice Award for Film -
            Choice Movie: Action Adventure<br><br>People's Choice Award for Favorite Action Movie<br><br>ADG Excellence
            in Production Design Awards : Fantasy Film - Charles Wood<br><br>Teen Choice Award for Choice Movie Villain
            - Josh Brolin
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
            <a href="https://www.hotstar.com/in/movies/avengers-endgame/1260013556"><img class="slogo" src="dh.jpg"
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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        