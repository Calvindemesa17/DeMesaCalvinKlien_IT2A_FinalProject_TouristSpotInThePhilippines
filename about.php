<?php
$img = "assets/img/about1.jpeg";
$img = "assets/img/mission.jpeg";

$img = "assets/img/about2.jpeg";
$img = "assets/img/about3.jpeg";

$img = "assets/img/Profile.jpg";
$img = "assets/img/aj.jpg";
$img = "assets/img/daniel.jpg";
$img = "assets/img/jasper.jpg";


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

  <main id="main">
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title"><?php echo "About us"?></h1>
          </div>
        </div>

        <div class="row mb-5">

          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src=<?php echo"assets/img/about1.jpeg"?> alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">
              <div class="post-meta mt-4"><?php echo "About us"?></div>
              <h2 class="mb-4 display-4"><?php echo "Philippines History"?></h2>
              <p><?php echo "The Philippines takes its name from Philip II, who was king of Spain during the Spanish colonization of the islands in the 16th century. Because it was under Spanish rule for 333 years and under U.S. tutelage for a further 48 years, the Philippines has many cultural affinities with the West."?></p>
              <p><?php echo "The written record of the Philippine Islands starts with the coming of the Spaniards. Not that the country had not had a history and a culture and a literature before! But the Spaniards, in their religious zeal, destroyed the earlier records as completely as possible."?></p>
            </div>
          </div>

          <div class="d-md-flex post-entry-2 half mt-5">
            <a href="#" class="me-4 thumbnail order-2">
              <img src=<?php echo"assets/img/mission.jpeg"?> alt="" class="img-fluid">
            </a>
            <div class="pe-md-5 mt-4 mt-md-0">
              <div class="post-meta mt-4"><?php echo "Mission &amp; Vision"?></div>
              <h2 class="mb-4 display-4"><?php echo "Mission &amp; Vision"?></h2>
              <p><?php echo "We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potentialand contribute meaningfully to building the nation. As a learner-centered public institution,the Department of Education continuously improves itself to better serve its stakeholders."?></p>
              <p><?php echo "To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where, Students learn in a child-friendly, gender-sensitive, safe, and motivating environment,Teachers facilitate learning and constantly nurture every learner, Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen ,Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners."?></p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section class="mb-5 bg-light py-5">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-between align-items-lg-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <h2 class="display-4 mb-4"><?php echo "Latest News"?></h2>
            <p><?php echo "BACOLOD CITY, Philippines — Francisca Susano, the country's oldest living person, celebrated her 124th birthday on Saturday with ranking government officials among her guests and well-wishers."?></p>
            <p><?php echo "Ferdinand Magellan first landed in the Philippines in 1521. The name Philippines comes from Philip II who was the king of Spain during the 16th century when the country became a Spanish colony. The Philippines was granted to the United States in 1898 following the Spanish-American War."?></p>
            <p><a href="#" class="more"><?php echo "View All Blog Posts"?></a></p>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6">
                <img src=<?php echo "assets/img/about2.jpeg"?> alt="" class="img-fluid mb-4">
              </div>
              <div class="col-6 mt-4">
                <img src=<?php echo "assets/img/about3.jpeg"?> alt="" class="img-fluid mb-4">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h2 class="display-4"><?php echo "Our Team"?></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src=<?php echo"assets/img/Profile.jpg"?> alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4><?php echo "Calvin Klien De Mesa"?></h4>
            <span class="d-block mb-3 text-uppercase"><?php echo "BSIT - 2A"?></span>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src=<?php echo"assets/img/aj.jpg"?> alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4><?php echo "Aj Bautista"?></h4>
            <span class="d-block mb-3 text-uppercase"><?php echo "BSIT - 2A"?></span>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src=<?php echo"assets/img/daniel.jpg"?> alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4><?php echo "Daniel Ramos Ricohermoso"?></h4>
            <span class="d-block mb-3 text-uppercase"><?php echo "BSIT - 2A"?></span>
          </div>
          <div class="col-lg-4 text-center mb-5">
           
          </div>

          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/jasper.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4><?php echo "Jasper Marquez"?></h4>
            <span class="d-block mb-3 text-uppercase"><?php echo "BSIT - 2A"?></span>
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