<!DOCTYPE html>
<html>
  <head>
    <title>Movie.ge</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="javascript.js" defer></script>
    <script src="jquery.js"></script>
    <meta charset="UTF-8"> 
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
        <div class="header-right-con active-header">
          <a href="homepage.php" class="header-buttons">მთავარი</a>
          <a href="filmebi.php" class="header-buttons">ფილმები</a>
          <a href="#" class="header-buttons">სერიალები</a>
          <a href="animeebi.php" class="header-buttons">ანიმეები</a>
        <!-- <div class="call-profile"><i class="far fa-user"></i></div></a> -->
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
    <!-- new series-->
    <div class="ep-box-title">
      <i class="fas fa-film"></i><a href="#">სერიალები</a>
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
  <div class="episode-con">
    <!-- box 6 -->
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
        <h1 class="episode-title" title="Loki">ლოკი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/14304-3840x2160-desktop-4k-loki-tv-series-wallpaper-image.jpg"
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
    <!-- box 7 -->
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
        <h1 class="episode-title" title="berlin">ბერლინი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/Berlin_(Spanish_TV_series).jpg"
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
      <!-- box 8 -->
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
        <h1 class="episode-title" title="daredevil">თავქარიანი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/BEST-TV-SHOWS-OF-2015-so-far-daredevil.jpg"
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
    <!-- box 9 -->
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
        <h1 class="episode-title" title="peaky blinders">ალესილი კეპები</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/MV5BZjYzZDgzMmYtYjY5Zi00YTk1LThhMDYtNjFlNzM4MTZhYzgyXkEyXkFqcGdeQXVyMTE5NDQ1MzQ3._V1_.jpg"
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
    <!-- box 10 -->
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
        <h1 class="episode-title" title="Ragnarok">რაგნარროკი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/Ragnarok_TV_Series-819648458-large.jpg"
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
  <div class="episode-con">
    <!-- box 11 -->
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
        <h1 class="episode-title" title="chess">ლაზიერის გამბიტი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/amber-benner-chess-tv-series-netflix-tv-series-portrait-display-hd-wallpaper-preview.jpg"
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
    <!-- box 12 -->
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
        <h1 class="episode-title" title="-the-last-of-us">უკანასკნელები</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/HD-wallpaper-tv-show-the-last-of-us.jpg"
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
      <!-- box 13 -->
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
        <h1 class="episode-title" title="gotham">გოთემი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/preview_gotham-tv-series-logo.jpg"
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
    <!-- box 14 -->
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
        <h1 class="episode-title" title="salem">
          სალემი
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/salem.jpg"
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
    <!-- box 15 -->
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
        <h1 class="episode-title" title="star wars">
          ვარსკვლავური ომები
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/star wars.jpg"
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
  <div class="episode-con">
    <!-- box 16 -->
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
        <h1 class="episode-title" title="The 100">100</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/The 100.jpg"
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
    <!-- box 17 -->
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
        <h1 class="episode-title" title="the-boys">ბიჭები</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/the-boys-1fe3hnl120ch1bc6.jpg"
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
      <!-- box 18 -->
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
        <h1 class="episode-title" title="the-witcher">ვითჩერი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/wallpapersden.com_netflix-the-witcher-season-3_2400x1350.jpg"
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
    <!-- box 19 -->
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
        <h1 class="episode-title" title="wednesday">
          ვენსდეი
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/wednesday.jpg"
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
    <!-- box 20 -->
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
        <h1 class="episode-title" title="arrow">
          ისარი
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewEpFolder/arrow.jpg"
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
  </div>
  <!-- end of episodes  -->

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
