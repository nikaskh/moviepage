<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<head>
    <title>Movie.ge</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="javascript.js" defer></script>
    <script src="jquery.js"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous" />
    <link rel="icon" href="./images/SiteIcon/siteicon.jpg" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap"
      rel="stylesheet" />
    <!-- swiper-->

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  </head>
  <body>
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
    <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="swiper-img" src="./images/slide1.jpg" />
          <div class="slide-poster-items">
            <a href="page.php" class="poster-link">
              <h1 class="slide-movie-name">მძიმე დანაშაული</h1>
            </a>
            <span>2008</span>
            <a href="page.php" class="watch-movie">
              <div>ნახეთ</div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <img class="swiper-img" src="./images/slide2.jpg" />
          <div class="slide-poster-items">
            <a href="page.php" class="poster-link">
              <h1 class="slide-movie-name">ალესილი კეპები</h1>
            </a>
            <span>2013</span>
            <a href="page.php" class="watch-movie">
              <div>ნახეთ</div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <img class="swiper-img" src="./images/slide3.jpg" />
          <div class="slide-poster-items">
            <a href="page.php" class="poster-link">
              <h1 class="slide-movie-name">სამეფო კარის თამაშები</h1>
            </a>
            <span>2011</span>
            <a href="page.php" class="watch-movie">
              <div>ნახეთ</div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <img class="swiper-img" src="./images/slide4.jpg" />
          <div class="slide-poster-items">
            <a href="page.php" class="poster-link">
              <h1 class="slide-movie-name">მანდალორიანელი</h1>
            </a>
            <span>2019</span>
            <a href="page.php" class="watch-movie">
              <div>ნახეთ</div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <img class="swiper-img" src="./images/slide5.jpg" />
          <div class="slide-poster-items">
            <a href="page.php" class="poster-link">
              <h1 class="slide-movie-name">ვითჩერი</h1>
            </a>
            <span>2019</span>
            <a href="page.php" class="watch-movie">
              <div>ნახეთ</div>
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="site-display">
      <!-- first table new episodes  -->
      <div class="episode-box-con">
        <div class="ep-box-title">
          <i class="fas fa-film"></i><a href="./serialebi.html">ახალი ეპიზოდები</a>
        </div>

        <div class="episode-con">
          <!-- box 1 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                Hundreds of cash-strapped players accept a strange invitation to
                compete in children's games. Inside, a tempting prize awaits
                with deadly high stakes. A survival game that has a whopping
                45.6 billion-won prize at stake.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.1</div>
                </div>
                <div class="years">2021</div>
              </div>
              <h1 class="episode-title" title="Squid Game">კალმარის თამაშები</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewEpFolder/squid-game.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 2 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                Lucifer Morningstar has decided he's had enough of being the
                dutiful servant in Hell and decides to spend some time on Earth
                to better understand humanity. He settles in Los Angeles - the
                City of Angels.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.1</div>
                </div>
                <div class="years">2016</div>
              </div>
              <h1 class="episode-title" title="Lucifer">ლუციფერი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewEpFolder/Lucifer.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <div class="episode-box">
            <!-- box 3 -->
            <div class="episode-box-description-con">
              <p>
                Decades after their 1984 All Valley Karate Tournament bout, a
                middle-aged Daniel LaRusso and Johnny Lawrence find themselves
                martial-arts rivals again.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.6</div>
                </div>
                <div class="years">2018</div>
              </div>
              <h1 class="episode-title" title="Cobra Kai">კობრა კაი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewEpFolder/Cobra-Kai.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 4 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                When a young boy disappears, his mother, a police chief and his
                friends must confront terrifying supernatural forces in order to
                get him back.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.7</div>
                </div>
                <div class="years">2016</div>
              </div>
              <h1 class="episode-title" title="Stranger Things">
                უცნაური ამბები
              </h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewEpFolder/stanger-things.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 5 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                An unusual group of robbers attempt to carry out the most
                perfect robbery in Spanish history - stealing 2.4 billion euros
                from the Royal Mint of Spain.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.2</div>
                </div>
                <div class="years">2017</div>
              </div>
              <h1 class="episode-title" title="La Laca De Papel">
                ქაღალდის სახლი
              </h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewEpFolder/LaCasaDePapel.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <!-- end of episodes  -->

      <!-- new movies -->

      <div class="new-movie-con">
        <div class="ep-box-title">
          <i class="fas fa-film"></i><a href="./filmebi.html">ახალი ფილმები</a>
        </div>

        <div class="episode-con">
          <!-- box 1 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                Eddie Brock attempts to reignite his career by interviewing
                serial killer Cletus Kasady, who becomes the host of the
                symbiote Carnage and escapes prison after a failed execution.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>6.1</div>
                </div>
                <div class="years">2021</div>
              </div>
              <h1 class="episode-title" title="Venom: Let There Be Carnage">
                ვენომი
              </h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewMovie/venom2.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 2 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>An Interpol agent tracks the world's most wanted art thief.</p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>6.4</div>
                </div>
                <div class="years">2021</div>
              </div>
              <h1 class="episode-title" title="Red Notice">წითელი ცირკულარი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewMovie/red-notice.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <div class="episode-box">
            <!-- box 3 -->
            <div class="episode-box-description-con">
              <p>
                On a post-apocalyptic earth, a robot, built to protect the life
                of his creator's beloved dog, learns about life, love,
                friendship and what it means to be human.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>6.9</div>
                </div>
                <div class="years">2021</div>
              </div>
              <h1 class="episode-title" title="Finch">ფინჩი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewMovie/finch.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 4 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                Feature adaptation of Frank Herbert's science fiction novel
                about the son of a noble family entrusted with the protection of
                the most valuable asset and most vital element in the galaxy.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.2</div>
                </div>
                <div class="years">2021</div>
              </div>
              <h1 class="episode-title" title="Dune">დუნი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewMovie/Dune.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 5 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                Shang-Chi, the master of weaponry-based Kung Fu, is forced to
                confront his past after being drawn into the Ten Rings
                organization.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>7.6</div>
                </div>
                <div class="years">2021</div>
              </div>
              <h1 class="episode-title" title="Shang-Chi">შანგ-ჩი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/NewMovie/shang-chi.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Top Movies  -->
      <div class="movie-box-con">
        <div class="ep-box-title">
          <i class="fas fa-film"></i><a href="./filmebi.html">ტოპ ფილმები</a>
        </div>

        <div class="episode-con">
          <!-- box 1 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                A team of explorers travel through a wormhole in space in an
                attempt to ensure humanity's survival.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.6</div>
                </div>
                <div class="years">2014</div>
              </div>
              <h1 class="episode-title" title="Interstellar">ინტერსტელარი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/TopMovies/interstelar.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 2 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                When the creator of a virtual reality called the OASIS dies, he
                makes a posthumous challenge to all OASIS users to find his
                Easter Egg, which will give the finder his fortune and control
                of his world.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>7.4</div>
                </div>
                <div class="years">2018</div>
              </div>
              <h1 class="episode-title" title="Ready Player One">
                გამოცდილი მოთამაშე
              </h1>
            </div>
            <a href="page.php">
              <img
                src="./images/TopMovies/RPOne.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <div class="episode-box">
            <!-- box 3 -->
            <div class="episode-box-description-con">
              <p>
                A thief who steals corporate secrets through the use of
                dream-sharing technology is given the inverse task of planting
                an idea into the mind of a C.E.O., but his tragic past may doom
                the project and his team to disaster.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.8</div>
                </div>
                <div class="years">2010</div>
              </div>
              <h1 class="episode-title" title="Inception">დასაწყისი</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/TopMovies/inception.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 4 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                When a beautiful stranger leads computer hacker Neo to a
                forbidding underworld, he discovers the shocking truth--the life
                he knows is the elaborate deception of an evil
                cyber-intelligence.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>8.7</div>
                </div>
                <div class="years">1999</div>
              </div>
              <h1 class="episode-title" title="The Matrix">მატრიცა</h1>
            </div>
            <a href="page.php">
              <img
                src="./images/TopMovies/TheMatrix.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
          <!-- box 5 -->
          <div class="episode-box">
            <div class="episode-box-description-con">
              <p>
                When the menace known as the Joker wreaks havoc and chaos on the
                people of Gotham, Batman must accept one of the greatest
                psychological and physical tests of his ability to fight
                injustice.
              </p>
              <div class="years-imdb">
                <div class="imdb">
                  <i class="fab fa-imdb"></i>
                  <div>9.0</div>
                </div>
                <div class="years">2008</div>
              </div>
              <h1 class="episode-title" title="The Dark Knight">
                ბნელი რაინდი
              </h1>
            </div>
            <a href="page.php">
              <img
                src="./images/TopMovies/TheDarkKnight.jpg"
                alt="img"
                class="play-img-select" />
              <svg width="70" height="70" class="img-play-but">
                <g>
                  <title>background</title>
                  <rect
                    fill="none"
                    id="canvas_background"
                    height="72"
                    width="72"
                    y="-1"
                    x="-1" />
                  <g
                    display="none"
                    overflow="visible"
                    y="0"
                    x="0"
                    height="100%"
                    width="100%"
                    id="canvasGrid">
                    <rect
                      fill="url(#gridpattern)"
                      stroke-width="0"
                      y="0"
                      x="0"
                      height="100%"
                      width="100%" />
                  </g>
                </g>
                <g>
                  <title>Layer 1</title>
                  <ellipse
                    ry="32.5"
                    rx="32.5"
                    id="svg_1"
                    cy="34.999999"
                    cx="35.000001"
                    stroke-width="5"
                    stroke="#ffffff"
                    fill="none" />
                  <ellipse
                    rx="0.135135"
                    id="svg_2"
                    cy="51.068405"
                    cx="89.999974"
                    stroke-width="0.001"
                    stroke="#FF0000"
                    fill="#000" />
                  <path
                    stroke="#e3233e"
                    transform="rotate(90 38.513511657714844,35.00000000000001) "
                    id="svg_3"
                    d="m23.648655,48.648642l14.864858,-27.297285l14.864858,27.297285l-29.729715,0z"
                    stroke-width="4"
                    fill="none" />
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="movie-countdown-con">
      <div class="movie-countdown">
        <div class="timer-container">
          <div class="timer-circle">
            <div class="timer-value days"></div>
            <span>DAYS</span>
          </div>
          <div class="timer-circle">
            <div class="timer-value hours"></div>
            <span>HOURS</span>
          </div>
          <div class="timer-circle">
            <div class="timer-value minutes"></div>
            <span>MINS</span>
          </div>
          <div class="timer-circle">
            <div class="timer-value seconds"></div>
            <span>SECS</span>
          </div>
        </div>
        <h2 class="timer-title">AVENGERS: THE KANG DYNASTY</h2>
        <a href="https://www.youtube.com/watch?v=4F7YaJEXFXA" target="_blank" class="timer-trailer-button"><div>Trailer</div></a>
      </div>
    </div>

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
  
</body>
</html>