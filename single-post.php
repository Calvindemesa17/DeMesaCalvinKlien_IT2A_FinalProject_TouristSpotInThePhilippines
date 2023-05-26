<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo "Tourist Spots in the Philippines"?></title>
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

  <main id="main">

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <div class="col-md-9 post-content" data-aos="fade-up">

            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <h1 class="mb-5"><?php echo "Most Famous Bridge In The Philippines"?></h1>
              <p><span class="firstcharacter"><?php echo "T"?></span><?php echo "he San Juanico Bridge connects Tacloban City in Leyte to Santa Rita City in Samar, specifically across the San Juanico Strait. It was inaugurated in July 1973 and goes on for 2.16 kilometers, which makes it the second longest bridge in the Philippines after the new Cebu-Cordova Link Expressway. "?></p>
              <figure class="my-4">
                <img src=<?php echo"assets/img/leyte3.jpg"?> alt="" class="img-fluid">
              </figure>
              <p><?php echo "The entire structure is also a part of the Pan-Philippine Highway or Maharlikha Highway and is among the most iconic architectural landmarks in the Philippines. Along with serving as a major thoroughfare to boost economic activity in the two provinces, the bridge has also become one of the top Leyte tourist attractions, thanks to its craftsmanship. Crossing the bridge to see the fantastic views of the sea framed by the Samar and Leyte is also among the top things to do in Tacloban."?></p>
              <figure class="my-4">
                <img src="assets/img/leyte4.jpg" alt="" class="img-fluid">
              </figure>
              <p><?php echo "A famous urban legend involving the San Juanico Bridge is that its foundation was soaked with the blood of children. The story goes that when the bridge was being built, many children disappeared in Samar and Leyte, and it only stopped once it was finished. They say it was because the woman who managed its construction was highly superstitious and was ordered by a fortune teller to mix the foundation with children’s blood for the bridge to stand. She had her men kidnap street children at night to slit their throats on the bridge site, then throw their bodies over the water. The diwata living in the Strait then cursed the woman to grow foul-smelling scales on her legs, forcing her to hide from public for the rest of her life."?></p>
            </div><!-- End Single Post Content -->

            
            <!-- ======= Comments Form ======= -->
            <div class="row justify-content-center mt-5">

              <div class="col-lg-12">
                <h5 class="comment-title"><?php echo "Leave a Comment"?></h5>
                <div class="row">
                  <div class="col-lg-6 mb-3">
                    <label for="comment-name"><?php echo "Name"?></label>
                    <input type="text" class="form-control" id="comment-name" placeholder="Enter your name">
                  </div>
                  <div class="col-lg-6 mb-3">
                    <label for="comment-email"><?php echo "Email"?></label>
                    <input type="text" class="form-control" id="comment-email" placeholder="Enter your email">
                  </div>
                  <div class="col-12 mb-3">
                    <label for="comment-message"><?php echo "Message"?></label>

                    <textarea class="form-control" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                  </div>
                  <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Post comment">
                  </div>
                </div>
              </div>
            </div><!-- End Comments Form -->

          </div>
          <div class="col-md-3">
            <!-- ======= Sidebar ======= -->
            <div class="aside-block">

              <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">

                <!-- Popular -->
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Balsa Kafe"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Sky Cafe Baybay City"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Mahagnao Volcano Natural Park "?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Sabang Daguitan Surf Camp"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Agas-Agas Bridge"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Alto Peak (Mt. Aminduen)"?></a></h2>
                  </div>
                </div> <!-- End Popular -->

                <!-- Trending -->
                <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Mayon Volcano"?></h3></a></h2>

                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "The Famous Kalanggaman Island Beach"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Green Island Surrounded of Body of Water"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Riding on Kayak Near Stone Mountain"?></a></h2>
                  </div>
                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Green Leaf Plant"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Tropical Beach with Palm Trees"?></a></h2>
                  </div>
                </div> <!-- End Trending -->

                <!-- Latest -->
                <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "MacArthur Landing Memorial National Park"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Twin Islands (San Pedro Island & San Pablo Island)"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Lake Danao"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "Sambawan island"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo " Limasawa Island"?></a></h2>
                  </div>

                  <div class="post-entry-1 border-bottom">
                    <h2 class="mb-2"><a href="#"><?php echo "San Juanico Bridge"?></a></h2>
                  </div>

                </div> <!-- End Latest -->

              </div>
            </div>

            <div class="col-6 col-lg-2">
            <h3 class="footer-heading"><?php echo "Categories"?></h3>
            <ul class="footer-links list-unstyled">
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Culture"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Tourist Spot"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Foods"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Festival"?></a></li>
            </ul>
          </div>-- End Categories -->

            <div class="aside-block">
              <h3 class="aside-title"><?php echo "Tags"?></h3>
              <ul class="aside-tags list-unstyled">
                <li><a href="category.php"><?php echo "Business"?></a></li>
                <li><a href="category.php"><?php echo "Culture"?></a></li>
                <li><a href="category.php"><?php echo "Sport"?></a></li>
                <li><a href="category.php"><?php echo "Food"?></a></li>
                <li><a href="category.php"><?php echo "Politics"?></a></li>
                <li><a href="category.php"><?php echo "Celebrity"?></a></li>
                <li><a href="category.php"><?php echo "Startups"?></a></li>
                <li><a href="category.php"><?php echo "Travel"?></a></li>
              </ul>
            </div><!-- End Tags -->

          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->


  
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
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Business"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Culture"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Sport"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Food"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Politics"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Celebrity"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Startups"?></a></li>
              <li><a href="category.php"><i class="bi bi-chevron-right"></i><?php echo "Travel"?></a></li>

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