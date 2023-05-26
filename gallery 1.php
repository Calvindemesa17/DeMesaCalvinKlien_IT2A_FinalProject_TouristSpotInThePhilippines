<?php
$img = "assets/img/beach9.jpg";
$img = "assets/img/beach10.jpg";
$img = "assets/img/beach13.jpg";
$img = "assets/img/beach14.jpg";
$img = "assets/img/beach15.jpg";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tourist Spots in the Philippines</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><?php echo "Philippines Tourist Spots"?></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php"><?php echo "Home"?></a></li>
          <li><a href="single-post.php"><?php echo "Single Post"?></a></li>
          <li class="dropdown"><a href="category.php"><span><?php echo "Categories"?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="culture.php"><?php echo "Culture"?></a></li>
              <li class="dropdown"><a href="#"><span><?php echo "Tourist Spot"?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="gallery 1.php"><?php echo "Gallery 1"?></a></li>
                  <li><a href="gallery 2.php"><?php echo "Gallery 2"?></a></li>
                  <li><a href="gallery 3.php"><?php echo "Gallery 3"?></a></li>
                  <li><a href="gallery 4.php"><?php echo "Gallery 4"?></a></li>
                  <li><a href="gallery 5.php"><?php echo "Gallery 5"?></a></li>
                </ul>
              </li>
              <li><a href="foods.php"><?php echo "Foods"?></a></li>
              <li><a href="festival.php"><?php echo "Festival"?></a></li>
            </ul>
          </li>

          <li><a href="about.php"><?php echo "About"?></a></li>
          <li><a href="contact.php"><?php echo "Contact"?></a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.php" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

<!-- Start #main -->

<main id="main">
    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-9" data-aos="fade-up">
            <h3 class="category-title"><?php echo "Beautiful Island in the Philippines"?></h3>

            <div class="d-md-flex post-entry-2 half">
              <a href="single-post.php" class="me-4 thumbnail">
                <img src=<?php echo"assets/img/beach9.jpg"?> alt="" class="img-fluid">
              </a>
              <div>
                <h3><a href="single-post.php"><?php echo "Maniwaya Island, Marinduque"?></a></h3>
                <p><?php echo "Located in the town of Santa Cruz in Marinduque, Maniwaya Island is one of the most popular islands in the province. It is situated in the middle of Polo Island and Mompong Island. People often flock to Maniwaya to see and enjoy the white sand beaches."?></p>
                <div class="d-flex align-items-center author">
                  
                  <div class="name">
                   
                  </div>
                </div>
              </div>
            </div>

            <div class="d-md-flex post-entry-2 half">
              <a href="single-post.php" class="me-4 thumbnail">
                <img src=<?php echo"assets/img/beach10.jpg"?> alt="" class="img-fluid">
              </a>
              <div>
                <h3><a href="single-post.php"><?php echo "Gigantes Island, Iloilo"?></a></h3>
                <p><?php echo "Islas de Gigantes in Carles, Iloilo is a beautiful group of islands with clear blue waters, long stretches of white sand beaches, a rich marine life, and interesting rock formations. The island chain of Islas de Gigantes is composed of Gigantes Sur and Gigantes Norte as well as a number of islets."?></p>
                <div class="d-flex align-items-center author">
                  
                  <div class="name">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="d-md-flex post-entry-2 half">
              <a href="single-post.php" class="me-4 thumbnail">
                <img src=<?php echo"assets/img/beach13.jpg"?> alt="" class="img-fluid">
              </a>
              <div>
                <h3><a href="single-post.php"><?php echo "Bantayan Island, Cebu"?></a></h3>
                <p><?php echo "Bantayan is a very low key island of 120,000 people that makes up part of the Visayas Island group. It is located northwest of the larger island of Cebu. The island is flat, covered in coconut palms and has sand so white that it could give Boracay's White Beach a run for its money!"?></p>
                <div class="d-flex align-items-center author">
                  
                  <div class="name">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="d-md-flex post-entry-2 half">
              <a href="single-post.php" class="me-4 thumbnail">
                <img src="assets/img/beach14.jpg" alt="" class="img-fluid">
              </a>
              <div>
                <h3><a href="single-post.php"><?php echo "Siargao Island, Surigao Del Norte"?></a></h3>
                <p><?php echo "Siargao is an island of nine municipalities in the province of Surigao del Norte. Known as the “Surfing Capital of the Philippines”, Siargao is mainly responsible for introducing surfing to the country. Apart from surfing, Siargao is also open to other activities such as cave explorations and rock climbing."?></p>
                <div class="d-flex align-items-center author">
                  
                  <div class="name">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="d-md-flex post-entry-2 half">
              <a href="single-post.php" class="me-4 thumbnail">
                <img src=<?php echo"assets/img/beach15.jpg"?> alt="" class="img-fluid">
              </a>
              <div>
                <h3><a href="single-post.php"><?php echo "Apo Island, Mindoro"?></a></h3>
                <p><?php echo "Apo Island is a small, pristine island surrounded by calm and clear waters. It is perfect for underwater activities such as snorkeling and diving; it has even been rated as one of the best dive sites in the world."?></p>
                <div class="d-flex align-items-center author">
                 
                  <div class="name">
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="text-start py-4">
              <div class="custom-pagination">
                <a href="#" class="prev"><?php echo "Prevous"?></a>
                <a href="#" class="active"><?php echo "1"?></a>
                <a href="#"><?php echo "2"?></a>
                <a href="#"><?php echo "3"?></a>
                <a href="#"><?php echo "4"?></a>
                <a href="#"><?php echo "5"?></a>
                <a href="#" class="next"><?php echo "Next"?></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true"><?php echo "Top 5 Islands In The Philippines"?></button>
                </li>
                <li class="nav-item" role="presentation">
                  
                </li>
                <li class="nav-item" role="presentation">
                  
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Maniwaya Island in Marinduque"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Gigantes Island, Iloilo"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Bantayan Island, Cebu"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Siargao island, Surigao Del Norte"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Apo Island, Mindoro"?></a></h2>
                  </div>

                 <!-- End Popular -->

             
            <!-- End Tags -->

          </div>

        </div>
      </div>
    </section>
<!-- End #main -->

  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">

    <div class="row g-5">
      <div class="col-lg-4">
        <h3 class="footer-heading"><?php echo "Philippines Tourist Spots"?></h3>
        <p><?php echo "Traveling has always been a great way of making yourself invigorated and energized. To be stress free and to break the vicious circle of you hectic routine, traveling to different places can make you escape your dull and monotonous daily work schedule.By traveling, you embrace new cultures and new trends, which make your mind open and you think from a newer perspective."?></p>
        <p><a href="about.php" class="footer-link-more"><?php echo "Learn More"?></a></p>
      </div>
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading"><?php echo "Navigation"?></h3>
        <ul class="footer-links list-unstyled">
          <li><a href="index.php"><i class="bi bi-chevron-right"></i><?php echo "Home"?></a></li>
          <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Categories"?></a></li>
          <li><a href="single-post.php"><i class="bi bi-chevron-right"></i><?php echo "Single Post"?></a></li>
          <li><a href="about.php"><i class="bi bi-chevron-right"></i><?php echo "About us"?></a></li>
          <li><a href="contact.php"><i class="bi bi-chevron-right"></i><?php echo "Contact"?></a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2">
            <h3 class="footer-heading"><?php echo "Categories"?></h3>
            <ul class="footer-links list-unstyled">
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Culture"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Tourist Spot"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Foods"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Festival"?></a></li>
            </ul>
          </div>

      <div class="col-lg-4">
        <h3 class="footer-heading"><?php echo "Best Sunset In The Philippines"?></h3>

        <ul class="footer-links footer-blog-entry list-unstyled">
          <li>
            <a href="single-post.php" class="d-flex align-items-center">
              <img src=<?php echo"assets/img/footer1.jpeg"?> alt="" class="img-fluid me-3">
              <div>
                <span><?php echo "Boracay Island"?></span>
              </div>
            </a>
          </li>

          <li>
            <a href="single-post.php" class="d-flex align-items-center">
              <img src=<?php echo"assets/img/footer2.jpg"?> alt="" class="img-fluid me-3">
              <div>
                <span><?php echo "Puerto Galera"?></span>
              </div>
            </a>
          </li>

          <li>
            <a href="single-post.php" class="d-flex align-items-center">
              <img src=<?php echo"assets/img/footer3.jpg"?> alt="" class="img-fluid me-3">
              <div>
                <span><?php echo "El Nido"?></span>
              </div>
            </a>
          </li>

          <li>
            <a href="single-post.php" class="d-flex align-items-center">
              <img src=<?php echo"assets/img/footer4.jpg"?> alt="" class="img-fluid me-3">
              <div>
                <span><?php echo "Siargao Island"?></span>
              </div>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</div>

<div class="footer-legal">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <div class="copyright">
        <?php echo " © Copyright "?> <strong><span><?php echo "Philippines"?></span></strong>.<?php echo "Tourist Spots"?>
        </div>

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
          Designed by <a href="https://guidetothephilippines.ph/articles/what-to-experience/top-tourist-spots-philippines"><?php echo "guidetothephilippines.ph"?></a>
        </div>

      </div>

      <div class="col-md-6">
        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>

    </div>

  </div>
</div>

</footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>