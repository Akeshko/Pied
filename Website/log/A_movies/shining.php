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
            <img src="../mov5.jpg" alt="poster" width="320" height="420" class="img1">
        </div>
        <div class="maind">
            <h1 class="movname">The Shining (1980)</h1><br>
            <h3>Genres- Drama, Horror </h3><br>
            <h3>Running Time-2h 26min</h3><br>
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
            A family heads to an isolated hotel for the winter where a sinister presence influences the father into violence, while his psychic son sees horrific forebodings from both past and future.   
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
            <iframe width="400" height="250" src="https://www.youtube.com/embed/5Cb3ik6zP2I"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/WDpipB4yehk"></iframe>
            <iframe width="400" height="250" src="https://www.youtube.com/embed/S014oGZiSdI"></iframe>
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
            <h3><b class="crew-link" id="60" data-toggle="popover">Stanley Kubrick</b>,&nbsp;&nbsp;</h3><br>
            <h3 class="title">Written By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="61">Stephen King</b>,&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="60">Stanley Kubrick</b>&nbsp;&nbsp;</h3><br>
            <h3 class="title">Produced By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="60">Stanley Kubrick</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="62">Robert Fryer</b>
                </h3><br>
            <h3 class="title">Edited By- </h3>
            <h3><b class="crew-link" data-toggle="popover" id="63">Ray Lovejoy</b>&nbsp;&nbsp;
                
            </h3><br>

            <h3 class="title">Cast(Top Billing)-</h3>
            <h3><br> <span class="actors">
                <b class="crew-link" data-toggle="popover" id="64">Jack Nicholson</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="65">Shelley Duvall</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="66">Danny Lloyd</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="67">Scatman Crothers</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="68">Barry Nelson</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="69">Philip Stone</b>&nbsp;&nbsp;
                <b class="crew-link" data-toggle="popover" id="70">Joe Turkel</b>&nbsp;&nbsp;
                
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
            Best Horror Film<br>
            <br>Best Director-Stanley Kubrick<br>
            <br>Best Music-Béla Bartók<br>
            <br>Best Supporting Actor-Scatman Crothers<br>
            <br>National Film Preservation Board<br>
            
            
            
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
            <a href="https://www.netflix.com/watch/959008?trackId=13752289&tctx=0%2C0%2C1e4816927170b39e7ab2d749c23229dc1160aa13%3A9879d088f53f9dbd891d17184d47f4a9f46b6dc5%2C1e4816927170b39e7ab2d749c23229dc1160aa13%3A9879d088f53f9dbd891d17184d47f4a9f46b6dc5%2Cunknown%2C"><img class="slogo" src="../Movies/netflixlogo.png"
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
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        