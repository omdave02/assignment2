<?php
$mainurl="http://localhost/royalcatering/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>royal catering</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <script>
    $(document).ready(function(){
        new DataTable('#examples');
    })

</script>


</head>
<body>
  
  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Royal Catering<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo $mainurl;?>">Home</a></li>
          <li><a class="nav-link" href="about.php">About</a></li>
          <li><a class="nav-link" href="menu.php">Menu</a></li>
          <li><a class="nav-link" href="event.php">Events</a></li>
          <li><a class="nav-link" href="chefs.php">Chefs</a></li>
          <li><a class="nav-link" href="gallery.php">gallery</a></li>
          <?php 
          if (!isset($_SESSION["cusid"]))
          {
           ?>
              <li class="nav-item dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="account" aria-expanded="false">
                   account
              </button>

          
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="login.php">login</a></li>
          </ul>
          
          

          <?php

          }

          else{
            ?>
               <li class="nav-item dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><span class="bi bi-person-add">Welcome :<?php echo $_SESSION["name"];?></span>>
          
          </button>

          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="contact.php">contact</a></li>
          <li><a class="dropdown-item" href="manageprofile.php">Manageprofile</a></li>
          <li><a class="dropdown-item" href="reservationtable.php">reservationtable</a></li>
          <li><a class="dropdown-item" href="#">logout</a></li>
          </ul>
          </li>
          <?php

          }
          ?>
          
        </ul>
      </nav><!-- .navbar -->

     
    </div>
  </header><!-- End Header -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>