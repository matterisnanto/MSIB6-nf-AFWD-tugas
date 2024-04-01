<?php
include_once 'webmenu.php';
?>


<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion Template" />
    <meta name="keywords" content="Male_Fashion, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mat Fashion</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="header__logo">
              <a href="index.html"><img src="img/logo.png" alt /></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu m-auto ">
              <ul>
              <?php
              foreach ($menu_atas as $key => $value) {
                  if ($key == 'pages') {
                      echo "<li><a href='javascript:void(0)'>$value</a>  
                  </li>";
                  } else {
                      echo "<li><a href='index.php?hal=$key'>$value</a>  
                  </li>";
                  }
              }
?>
              <!-- <li><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="shop-details.html">Shop Details</a></li>
                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Check Out</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul></li>
              </ul> -->
              <!-- <?php
              foreach ($menu_atas as $key => $value) {
                  echo "<li><a href='index.php?hal=$key'>$value</a>  

                  </li>";
              }
?> -->
            </nav>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
              <a href="#" class="search-switch"
                ><img src="img/icon/search.png" alt
              /></a>
              <a href="#"><img src="img/icon/heart.png" alt /></a>
              <a href="#"><img src="img/icon/cart.png" alt /> <span>0</span></a>
              <div class="price">$0.00</div>
            </div>
          </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
      </div>
    </header>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>