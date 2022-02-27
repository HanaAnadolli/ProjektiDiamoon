<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<?php
include_once "../header/nav.php";
?>
<br><br><br><br>
<div class="swiper-container main-slider loading">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(fotot/foto1.jfif)">
        <img src="fotot/foto1.jfif" class="entity-img" />
      </figure>
      <div class="content">
        <br><br>
        <p class="title">Our Products</p>
        <span class="caption">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(fotot/foto2.jpg)">
        <img src="fotot/foto2.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Quality</p>
        <span class="caption">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</span>
      </div>

    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(fotot/foto4.jpg)">
        <img src="fotot/foto4.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Created</p>
        <span class="caption">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
      </div>

    </div>

  </div>

  <!-- Add Arrows -->
  <div class="arrows-container">
    <div class="swiper-arrow swiper-arrow-prev">
      <div class="arrow-back"></div>
      <span></span>
      <span></span>
    </div>
    <div class="swiper-arrow swiper-arrow-next">
      <div class="arrow-back"></div>
      <span></span>
      <span></span>
    </div>
  </div>

</div>

<br><br><br>

<div class="welcome">
  <h1>How we started our comapny</h1>
  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
</div>

<?php
include_once "../footer/footer.php";
?>

<script src="js/main.js"></script>
</body>
</html>