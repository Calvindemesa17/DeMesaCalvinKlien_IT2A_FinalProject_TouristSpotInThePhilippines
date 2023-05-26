<?php
$img = "assets/img/mayon2.jpeg";
$img = "assets/img/BORACAY.jpg";
$img = "assets/img/cebu1.jpeg";
$img = "assets/img/leyte1.jpeg";
$img = "assets/img/top2.jpeg";
$img = "assets/img/bohol c.jpeg";
$img = "assets/img/top3.jpeg";
$img = "assets/img/top4.jpeg";
$img = "assets/img/top5.jpeg";
$img = "assets/img/top6.jpeg";
$img = "assets/img/top7.jpeg";
$img = "assets/img/top8.jpeg";
$img = "assets/img/fam2.jpg";


$img = "assets/img/footer1.jpeg";
$img = "assets/img/footer2.jpg";
$img = "assets/img/footer3.jpg";
$img = "assets/img/footer4.jpg";

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tourist Spot In The Philippines</title>
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
</
      <a href="index.php" class="logo d-flex align-items-center"></a>
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>
          <?php
          echo "Philippines Tourist Spots"
          ?>
          </h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php"><?php echo "Home"?></a></li>
          <li><a href="single-post.php"><?php echo "Single Post"?></a></li>

          <li class="dropdown"><a href="category.php"><span><?php echo "Categories"?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="search-result.php"><?php echo "Search Result"?></a></li>
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
      <button><a href="index.php" class="footer-link-more"><?php echo "Logout"?></a></button>
    </div>
    
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo "assets/img/mayon2.jpeg"?>);">
                    <div class="img-bg-inner">
                      <h2><?php echo "Mayon Volcano Stratovolcano in the Philippines"?></h2>
                      <p><?php echo "Mayon, also known as Mount Mayon and Mayon Volcano, is an active stratovolcano in the province of Albay in Bicol, Philippines. A popular tourist spot, it is renowned for its perfect cone because of its symmetric conical shape, and is regarded as very sacred in Philippine mythology."?></p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo'assets/img/BORACAY.jpg'?>);">
                    <div class="img-bg-inner">
                      <h2><?php echo "Boracay Island in Malay, Aklan"?></h2>
                      <p><?php echo "Boracay is a small island in the central Philippines. It's known for its resorts and beaches. Along the west coast, White Beach is backed by palm trees, bars and restaurants. On the east coast, strong winds make Bulabog Beach a hub for water sports."?></p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo'assets/img/cebu1.jpeg'?>);">
                    <div class="img-bg-inner">
                      <h2><?php echo "Cebu Island in the Philippines"?></h2>
                      <p><?php echo "Cebu is a long and narrow island that stretches 196 km from north to south, and 32 km from east to west at its widest point. Located on the eastern central area of the island, Cebu City is its main urban center."?></p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.php" class="img-bg d-flex align-items-end" style="background-image: url(<?php echo'assets/img/leyte1.jpeg'?>);">
                    <div class="img-bg-inner">
                      <h2><?php echo "Leyte Island in the Philippines"?></h2>
                      <p><?php echo "Leyte is an island in the Visayas group of islands in the Philippines. It is eighth-largest and sixth-most populous island in the Philippines, with a total population of 2,626,970 as of 2020 census. Since the accessibility of land has been depleted, Leyte has provided countless number of migrants to Mindanao. "?></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-4">
            <div class="post-entry-1 lg">
              <a href="single-post.php"><img src=<?php echo"assets/img/top3.jpeg"?> alt="" class="img-fluid"></a>
              <h2><a href="single-post.php"><?php echo "Top 6 Tourist Spot In The Philippines"?></a></h2>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.php"><img src=<?php echo"assets/img/top2.jpeg"?> alt="" class="img-fluid"></a>                 
                  <h2><a href="single-post.php"><?php echo "Let’s Get To Mayon Volcano"?></a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.php"><img src=<?php echo"assets/img/top4.jpeg"?> alt="" class="img-fluid"></a>
                  <h2><a href="single-post.php"><?php echo "The Famous Kalanggaman Island Beach"?></a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.php"><img src=<?php echo"assets/img/top5.jpeg"?> alt="" class="img-fluid"></a>
                  <h2><a href="single-post.php"><?php echo "Green Island Surrounded of Body of Water"?></a></h2>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.php"><img src=<?php echo"assets/img/top6.jpeg"?> alt="" class="img-fluid"></a>
                  <h2><a href="single-post.php"><?php echo "Group of People Riding on Kayak Near Stone Mountain"?></a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.php"><img src=<?php echo"assets/img/top7.jpeg"?> alt="" class="img-fluid"></a>
                  <h2><a href="single-post.php"><?php echo "Green Leaf Plant Near Shoreline"?></a></h2>
                </div>
                <div class="post-entry-1">
                  <a href="single-post.php"><img src=<?php echo"assets/img/top8.jpeg"?> alt="" class="img-fluid"></a>
                  <h2><a href="single-post.php"><?php echo "Tropical Beach with Palm Trees"?></a></h2>
                </div>
              </div>

              <!-- Trending Section -->
              <div class="col-lg-4">

                <div class="trending">
                  <h3><?php echo "Trending"?></h3>
                  <ul class="trending-post">
                    <li>
                      <a href="single-post.php">
                        <span class="number">1</span>
                        <h3><?php echo "Mayon Volcano"?></h3>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.php">
                        <span class="number">2</span>
                        <h3><?php echo "The Famous Kalanggaman Island Beach"?></h3>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.php">
                        <span class="number"><?php echo "3"?></span>
                        <h3><?php echo "Green Island Surrounded of Body of Water"?></h3>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.php">
                        <span class="number"><?php echo "4"?></span>
                        <h3><?php echo "Riding on Kayak Near Stone Mountain"?></h3>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.php">
                        <span class="number"><?php echo "5"?></span>
                        <h3><?php echo "Green Leaf Plant"?></h3>
                      </a>
                    </li>
                    <li>
                      <a href="single-post.php">
                        <span class="number"><?php echo "6"?></span>
                        <h3><?php echo "Tropical Beach with Palm Trees"?></h3>
                      </a>
                    </li>
                  </ul>
                </div>

              </div> <!-- End Trending Section -->
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Culture Category Section ======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
          <h2><?php echo "Culture"?></h2>
          <div><a href="category.php" class="more"><?php echo "See All Culture"?></a></div>
        </div>
        <div class="row">
          <div class="col-md-9">

            <div class="d-lg-flex post-entry-2">
              <a href="single-post.php" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                <img src="assets/img/bohol c.jpeg" alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date"><?php echo "Culture"?></span> <span class="mx-1">&bullet;</span> <span><?php echo "Sandugo Festival (July 1-31)"?></span></div>
                <h3><a href="single-post.php"><?php echo "Fiestas A fiesta is a form of celebration in honor of the respective patron saint of the town."?></a></h3>
                <p><?php echo "Over the decades that have passed, many have regarded Bohol as the ‘Fiesta Capital’ of the Philippines, especially on the month of May. Call it peculiar, uncanny, surprising, or whatever you have in mind, be perplexed upon discovering that the Boholanos’ love for fiesta is eternal. Be it in the city or anywhere else in the province of Bohol, the month of May is a haven for fiestas day by day."?></p>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3 class="m-0 p-0"><?php echo "Kenneth Laylay"?></h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4">
                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
                  <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos take pride in their families"?></a></h2>
                  <p><?php echo "In the Philippines, it is family first. So whether you are part of the immediate family or you belong to the third or fourth generation, you are treated as a family member. Sometimes, even the closest of friends are considered family, too."?></p>
                </div>

                <div class="post-entry-1">
                  <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
                  <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos are very resilient"?></a></h2>
                  <p><?php echo "In times of calamities and catastrophes, Filipinos always manage to rise above the challenge. Instead of wallowing, they manage to pick themselves up and smile."?></p>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="post-entry-1">
                  <a href="single-post.php"><img src="assets/img/fam2.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
                  <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos are very religious"?></a></h2>
                  <p><?php echo "In all corners of a Filipino house, you can find brazen images of crosses and other religious paraphernalia. They go to church every Sunday, or sometimes even twice or three times a week."?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
              <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos are very respectful"?></a></h2>
              <p><?php echo "From the moment they are born into this world, they are already taught how to be respectful by using these simple catchphrases—po and opo, words that end sentences when addressing elders. They have a culture of pagmamano, which is where they raise the backs of the hands of their elders to their foreheads as a sign of respect."?></p>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
              <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos help one anothert"?></a></h2>
              <p><?php echo "More popularly known as bayanihan, Filipinos help one another—without expecting anything in return—so that undertaking their tasks and responsibilities become much easier. Sometimes this is called “community spirit.”"?></p>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
              <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos value traditions and culture"?></a></h2>
              <p><?php echo "For Filipinos, traditions in their home and in their family are important. They usually set aside a specific day for a certain celebration like festivals, birthday parties, reunions, etc. And of course, every gathering is dedicated to keeping up with each other over sumptuous food. If, like us, good food is what makes you get up in the morning, then you might be interested in our gourmet Mini Trips to destinations such as Bologna and Puglia, bookable now through Culture Trip."?></p>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
              <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos love to party"?></a></h2>
              <p><?php echo "Yes, Filipinos love to hold celebrations and fiestas. Bacolod has its MassKara Festival, Davao has its Kadayawan Festival, and Marinduque has its Moriones Festival."?></p>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
              <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos have the longest Christmas celebrations—ever"?></a></h2>
              <p><?php echo "Even as early as August, you can hear Christmas songs and jingles being played in the malls or in the restaurants in the Philippines. The mood becomes festive, with many people shopping and in good spirits. Christmas celebrations last until around the first or second week of January. Love the yuletide time of year,"?></p>
            </div>

            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date"><?php echo "Culture"?></span></div>
              <h2 class="mb-2"><a href="single-post.php"><?php echo "Filipinos love to eat"?></a></h2>
              <p><?php echo "Aside from breakfast, lunch, and dinner, Filipinos manage to squeeze in a little meal in between, too. Whether they eat every hour or every three hours, they savour every bite. Oh, and they do love going to buffets!"?></p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Culture Category Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading"><?php echo "Philippines Tourist Spots"?></h3>
            <p><?php echo "Traveling has always been a great way of making yourself invigorated and energized. To be stress free and to break the vicious circle of you hectic routine, traveling to different places can make you escape your dull and monotonous daily work schedule.By traveling, you embrace new cultures and new trends, which make your mind open and you think from a newer perspective."?></p>
          
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