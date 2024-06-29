<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/moviepage.css.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="site-header-con">
              <div class="site-header">
                <a href="homepage.php" class="site-name-link"
                  ><img src="./images/sitename.png" alt="site name" class="site-name"
                /></a>
                <nav class="header-right-con active-header">
                  <a href="#" class="header-buttons">მთავარი</a>
                  <a href="filmebi.php" class="header-buttons">ფილმები</a>
                  <a href="serialebi.php" class="header-buttons">სერიალები</a>
                  <a href="animeebi.php" class="header-buttons">ანიმეები</a>
                <!-- <div class="call-profile"><i class="far fa-user"></i></div> -->
                <p >
                 <?php 
               if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
               }
               ?>
              </p>
              <a href="logout.php" class="logout" style="    color: white;
            vertical-align: middle;
            margin-top: 5px;
            margin-left: 100px;
            text-decoration: none;
            background-color: darkcyan;
            padding: 10px;
            border-radius: 28px;">გამოსვლა</a>
            </div>
            </nav>
                <div class="mobile-ver-close-but"><i class="fas fa-bars"></i></div>
                <div style="text-align:center; padding:15%;">
                <div style="text-align:center;">
        
            </div>
              </div>
            </div>
            </header>
        <main style="align-items: center;">
            <div style="display: flex; flex-direction: row-reverse">
            <div class="movie-player" style="margin-top: 100px;">
                <video controls poster="https://via.placeholder.com/600x300" style="width: 80%; align-items: center;">
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="movie-details" style="width: 56%; ">
                <h2 style="color: white;">ლუციფერი</h2>
                <img src="images/NewEpFolder/Lucifer.jpg" alt="" style="width: 200px;  border-radius: 30px; margin-top: 20px">
                <p style="color: white;">წელი: 2023</p>
                <p style="color: white;">აღწერა: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae ligula eget odio laoreet ultricies.</p>
            </div>
        </div>
        </main>
    </div>
    <footer>
        <div class="site-display">
            <div class="cast-slide-container">
              <div class="cast-left-but"><i class="fas fa-chevron-left"></i></div>
              <div class="cast-right-but"><i class="fas fa-chevron-right"></i></div>
              <div class="cast-slide-display">
                <div class="cast-slide">
                 <a href="https://en.wikipedia.org/wiki/Robert_Downey_Jr." target="_blank"> <img
                    src="./images/castPhoto/Robert-Downey-Jr.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Robert_Downey_Jr." target="_blank">
                    <h3 class="cast-name">Robert Downey Jr</h3>
                  </a>
                </div>
      
                <div class="cast-slide">
                <a href="https://en.wikipedia.org/wiki/Keanu_Reeves" target="_blank">  <img
                    src="./images/castPhoto/KeanuReeves.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Keanu_Reeves" target="_blank">
                    <h3 class="cast-name">Keanu Reeves</h3>
                  </a>
                </div>
      
                <div class="cast-slide">
                 <a href="https://en.wikipedia.org/wiki/Margot_Robbie" target="_blank"> <img
                    src="./images/castPhoto/MargotRobbie.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Margot_Robbie" target="_blank">
                    <h3 class="cast-name">Margot Robbie</h3>
                  </a>
                </div>
      
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Scarlett_Johansson" target="_blank">  <img
                    src="./images/castPhoto/Scarlett Johansson.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Scarlett_Johansson" target="_blank">
                    <h3 class="cast-name">Scarlett Johansson</h3>
                  </a>
                </div>
      
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Elizabeth_Olsen" target="_blank">    <img
                    src="./images/castPhoto/ElizabethOlsen.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Elizabeth_Olsen" target="_blank">
                    <h3 class="cast-name">Elizabeth Olsen</h3>
                  </a>
                </div>
      
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Chris_Evans_(actor)" target="_blank">  <img
                    src="./images/castPhoto/ChrisEvans.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Chris_Evans_(actor)" target="_blank">
                    <h3 class="cast-name">Chris Evans</h3>
                  </a>
                </div>
      
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Angelina_Jolie" target="_blank">   <img
                    src="./images/castPhoto/angelinaJolie.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Angelina_Jolie" target="_blank">
                    <h3 class="cast-name">Angelina Jolie</h3>
                  </a>
                </div>
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Denzel_Washington" target="_blank">    <img
                    src="./images/castPhoto/denzelWashington.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Denzel_Washington" target="_blank">
                    <h3 class="cast-name">Denzel Washington</h3>
                  </a>
                </div>
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Julia_Roberts" target="_blank">   <img
                    src="./images/castPhoto/JuliaRoberts.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Julia_Roberts" target="_blank">
                    <h3 class="cast-name">Julia Roberts</h3>
                  </a>
                </div>
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Nicole_Kidman" target="_blank">      <img
                    src="./images/castPhoto/NicoleKidman.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Nicole_Kidman" target="_blank">
                    <h3 class="cast-name">Nicole Kidman</h3>
                  </a>
                </div>
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/George_Clooney" target="_blank">   <img
                    src="./images/castPhoto/GeorgeClooney.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/George_Clooney" target="_blank">
                    <h3 class="cast-name">George Clooney</h3>
                  </a>
                </div>
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Hugh_Jackman" target="_blank">  <img
                    src="./images/castPhoto/HughJackman.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Hugh_Jackman"target="_blank" >
                    <h3 class="cast-name">Hugh Jackman</h3>
                  </a>
                </div>
                <div class="cast-slide">
                  <a href="https://en.wikipedia.org/wiki/Christian_Bale" target="_blank">  <img
                    src="./images/castPhoto/ChristianBale.jpg"
                    class="cast-img"
                    alt="img" /></a>
                  <a href="https://en.wikipedia.org/wiki/Christian_Bale" target="_blank">
                    <h3 class="cast-name">Christian Bale</h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="site-footer-con">
            <div class="site-footer">
              <div class="site-author">
                Created by :
                <a href=
                  >Nika Skhiladze</a
                >
              </div>
              <div class="site-gmail">
                <i class="far fa-envelope"></i> :
                <a href="mailto:skhiladze.n@gtu.ge"
                  >skhiladze.n@gtu.ge</a
                >
              </div>
              <div class="site-born">© 2024</div>
            </div>
          </div>
    </footer>
</body>
</html>
