<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>xxyP</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
    rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
            <span>
              xxyp shop
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">HOME</a>
                <a href="about.php">ABOUT</a>
                <a href="food.php">Food</a>
                <a href="contact.php">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <section class="contact_section layout_padding">
    <div class="container">
      <h2>
       Kontak kami
      </h2>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="">
              <input type="text" placeholder="Name">
              <input type="text" placeholder="Phone number">
              <input type="email" placeholder="Email">
              <input type="text" placeholder="Message" class="message_input">
              <button>
                Send
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="contact_box">
            <a href="">
              <div class="img-box">
                <img src="images/location.png" alt="">
              </div>
              <h6>
                Jl. yang jauh jangan lupa pulang
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <img src="images/call.png" alt="">
              </div>
              <h6>
                (+62)82122393716
              </h6>
            </a>
            <a href="">
              <div class="img-box">
                <img src="images/envelope.png" alt="">
              </div>
              <h6>
                xxyrestaurant@gmail.com
              </h6>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="subscribe_section">
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <label for="subEmail">
              Our Newsletter
            </label>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="box">
              <input type="email" placeholder="Enter your email" id="subEmail">
              <button>
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <section class="container-fluid footer_section">
    <div class="social_container">
      <h4>
        Follow kami
      </h4>
      <div class="social-box">
        <a href="">
          <img src="images/fb.png" alt="">
        </a>
        <a href="">
          <img src="images/twitter.png" alt="">
        </a>
        <a href="">
          <img src="images/linkedin.png" alt="">
        </a>
        <a href="">
          <img src="images/youtube.png" alt="">
        </a>
      </div>
    </div>
    <p>
      &copy; 2023 xxyrestaurant.
      <a href="https://html.design/">Design by riskadwi</a>
    </p>
  </section>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 35,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
</body>

</html>