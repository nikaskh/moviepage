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
    <div class="site-header-con">
      <div class="site-header">
        <a href="homepage.php" class="site-name-link"
          ><img src="./images/sitename.png" alt="site name" class="site-name"
        /></a>
        <header>
        <div class="header-right-con active-header">
          <a href="homepage.php" class="header-buttons">მთავარი</a>
          <a href="#" class="header-buttons">ფილმები</a>
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
        </header>
        <div class="mobile-ver-close-but"><i class="fas fa-bars"></i></div>
      </div>
    </div>

    <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="swiper-img" src="./images/slide1.jpg" />
          <div class="slide-poster-items">
            <a href="#" class="poster-link">
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
            <a href="#" class="poster-link">
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
            <a href="page.phpage.php" class="watch-movie">
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
      <i class="fas fa-film"></i><a href="#">ფილმები</a>
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
          <h1 class="episode-title" title="finch">ფინჩი</h1>
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
          <h1 class="episode-title" title="red-notice">წითელი ცირკულარი</h1>
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
          <h1 class="episode-title" title="shang-chi">
            შანგ-ჩი
          </h1>
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
          <h1 class="episode-title" title="venom2">
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
        <h1 class="episode-title" title="Ant-Man">ანტ-მენი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/Ant-Man-and-The-Wasp-Quantumania-8-1200x1777-1-692x1024.jpg"
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
        <h1 class="episode-title" title="bee">მეფუტკრე</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/bee.jpg"
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
        <h1 class="episode-title" title="black panther">შავი პანტერა</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/black panther.jpg"
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
        <h1 class="episode-title" title="Black-Widow">
          შავი ქვრივი
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/Black-Widow.jpg"
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
        <h1 class="episode-title" title="deadpool">
          დედპული
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/deadpool.jpg"
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
        <h1 class="episode-title" title="fastx">ფორსაჟი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/fastx.jpg"
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
        <h1 class="episode-title" title="guardians-of-the-galaxy">გალაქტიკის მცველები</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/guardians-of-the-galaxy-vol.-3-2023-691x1024.jpg"
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
        <h1 class="episode-title" title="Hellboy">ჰელბოი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/Hellboy.jpg"
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
        <h1 class="episode-title" title="ironman">
          რკინის კაცი
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/ironman.jpg"
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
        <h1 class="episode-title" title="juftice-league">
          სამართლიანობის ლიგა
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/juftice-league.jpg"
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
        <h1 class="episode-title" title="Jumajni">ჯუმანჯი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/JumanjiTheNextLevelTeaserPoster.jpg"
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
        <h1 class="episode-title" title="kraven">კრავენი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/kraven.jpg"
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
        <h1 class="episode-title" title="morbius">მორბიუსი</h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/morbius.jpg"
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
        <h1 class="episode-title" title="Wonder-Women">
          ქალი საოცრება
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/Poster-of-Hollywood-movie-Wonder-Women.jpg"
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
        <h1 class="episode-title" title="treasure">
          საგანძური
        </h1>
      </div>
      <a href="page.php">
        <img
          src="./images/NewMovie/treasure.jpg"
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
