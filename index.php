<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ClucksnBulls</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/cnb-logo.png" rel="icon">
  <link href="assets/img/cnb-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/gallery_style.css" />

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+92 3350334656</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Daily Opening Hours: 12PM to 2AM</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">ClucksnBulls</a></h1> -->

      <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/cnb-logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Deals</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="#" onclick='window.location.href="https://wa.me/+923350334656?text=Hello,%20I%20want%20to%20order:"' class="book-a-table-btn scrollto d-none d-lg-flex">Order Food</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg">
          <h1>Welcome to <span>ClucksnBulls</span></h1>
          <h2>Delivering great food is our Honour!</h2>
          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#" onclick='window.location.href="https://wa.me/+923350334656?text=Hello,%20I%20want%20to%20order:"' class="btn-book animated fadeInUp scrollto">Order Food</a>
          </div>
        </div>
        <img src="assets/img/cnb-logo.png" alt="logo" class="hero-side-image desktop-logo" />
      </div>
      <img src="assets/img/cnb-logo.png" alt="logo" class="hero-side-image mobile-logo" />
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <?php
              require_once("connection.php");
              $sql = "select * from categories";
              $exec = mysqli_query($conn, $sql);
              $num = mysqli_num_rows($exec);
              $rec = mysqli_fetch_array($exec);
              $index = 0;
              foreach ($exec as $row) {
                $active = ($index == 0) ? 'filter-active' : '';
              ?>
                <li class="<?php echo $active; ?>" data-filter=".filter-<?php echo $row['id']; ?>">
                  <?php echo $row['category_name']; ?>
                </li>
              <?php
                $index++;
              }
              ?>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200" data-filter=".filter-<?php echo $row['id']; ?>">
          <?php
          require_once("connection.php");
          $sql = "select * from menu";
          $exec = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($exec);
          $rec = mysqli_fetch_array($exec);
          $index = 0;
          foreach ($exec as $row) {
          ?>
            <div class="col-lg-6 menu-item filter-<?php echo $row['category_id'] ?>">
              <img src="../admin/phpfiles/<?php echo $row['image'] ?>" class="menu-img" style="height:70px;width:70px" alt="">
              <div class="menu-content" style="margin-top:15px">
                <a href="#menu" style="margin-left:10px"> <?php echo $row['name']; ?></a><span>Rs.<?php echo $row['price']; ?></span>
              </div>
              <div class="menu-ingredients">
                <?php echo $row['description']; ?>
              </div>
            </div>
          <?php
          }
          ?>
        </div>

      </div>
    </section>
    <!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Deals</h2>
          <p>Check Our Deals</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

              <?php
              require_once("connection.php");
              $sql = "select * from deals";

              $exec = mysqli_query($conn, $sql);

              $num = mysqli_num_rows($exec);

              $rec = mysqli_fetch_array($exec);
              $index = 0;

              foreach ($exec as $row) {
                $active = ($index == 0) ? 'active' : '';
              ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo $active; ?>" data-bs-toggle="tab" href="#tab-<?php echo $row['id'] ?>"><?php echo $row['deal_number'] ?></a>
                </li>
              <?php $index++;
              } ?>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <?php
              require_once("connection.php");
              $sql = "select * from deals";

              $exec = mysqli_query($conn, $sql);

              $num = mysqli_num_rows($exec);
              $index = 0;
              $rec = mysqli_fetch_array($exec);

              foreach ($exec as $row) {
                $active = ($index == 0) ? 'active' : '';
              ?>
                <div class="tab-pane <?php echo $active; ?>" id="tab-<?php echo $row['id'] ?>">
                  <div class="row">
                    <div id="details-column" class="col-lg-8 details">
                      <h3><?php echo $row['deal_name'] ?></h3>
                      <p class="fst-italic"><?php echo $row['deal_description'] ?></p>
                      <p><?php echo $row['long_description'] ?></p>
                      </p>
                    </div>
                    <div id="image-column" class="col-lg-4 text-center">
                      <img src="../admin/phpfiles/<?php echo $row['deal_image'] ?>" alt="" class="img-fluid" style="height:200px;width:200px">
                    </div>
                  </div>
                </div>

              <?php $index++;
              } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Specials Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about_6.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <br>
            <h3>Our Mission</h3>
            <p class="fst-italic" style="text-align: justify; line-height: 30px;">
              To be recognised as prime and prodigious brand of fast food, offering products of fine quality and exceptional services at a competitive cost, Our goal is to provide an unforgettable takeaway or dining experience that leaves our customers happy and full, and we are passionate about food, service, and community.
            </p>
            <br>
            <h3>Our Vision</h3>
            <p class="fst-italic" style="text-align: justify; line-height: 30px;">
              Our vision is to become the go-to fast food restaurant in our community and beyond, known for our exceptional food, service, and commitment to our customers and the environment. We aim to continually innovate and improve our menu offerings to stay ahead of the trends and provide our customers with the best possible dining experience.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4> Quality of Food</h4>
              <p>We prioritize using fresh and high-quality ingredients to ensure great-tasting food for our customers.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4> Exceptional Service</h4>
              <p>We are committed to exceptional service, creating a welcoming atmosphere, and ensuring customer satisfaction.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Value for Money </h4>
              <p>We offer high-quality food and exceptional service at an affordable price, ensuring that our customers get great value for their money.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reviews</h2>
          <p>Add Your Comment</p>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" required placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email (Optional)" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>

          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Write your review here..."></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message" style="border-radius:10px">Your review has been submitted to ClucksnBulls. Thank you!</div>
            <div class="sent-message" style="border-radius:10px">Your review has been submitted to ClucksnBulls. Thank you!</div>

          </div>
          <div class="text-center"><button type="submit">Submit Review</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What customer are saying about us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
            require_once("connection.php");
            $sql = "select * from reviews";
            $exec = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($exec);
            $rec = mysqli_fetch_array($exec);
            $index = 0;
            foreach ($exec as $row) {
            ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?php echo $row['review'] ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <h3><?php echo $row['review_by'] ?></h3>
                  <h4><?php echo $row['email'] ?></h4>
                </div>
              </div>
            <?php } ?>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>
      <div class="gallery_container">
        <div class="gallery_box">
          <div class="gallery_dream">
            <img src="./assets/img/gallery/1.jpg" />
            <img src="./assets/img/gallery/2.jpg" />
            <img src="./assets/img/gallery/3.jpg" />
            <img src="./assets/img/gallery/4.jpg" />
          </div>
          <div class="gallery_dream">
            <img src="./assets/img/gallery/6.jpg" />
            <img src="./assets/img/gallery/7.jpg" />
            <img src="./assets/img/gallery/8.jpg" />
            <img src="./assets/img/gallery/9.jpg" />
            <img src="./assets/img/gallery/10.jpg" />
          </div>
          <div class="gallery_dream">
            <img src="./assets/img/gallery/11.jpg" />
            <img src="./assets/img/gallery/12.jpg" />
            <img src="./assets/img/gallery/13.jpg" />
            <img src="./assets/img/gallery/14.jpg" />
            <img src="./assets/img/gallery/15.jpg" />
            <img src="./assets/img/gallery/5.jpg" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row mt-0 mb-4">
          <div class="col-lg-3">
            <div class="info">
              <div class="open-hours">
                <i class="bi bi-geo-alt"></i>
                <h4>Address</h4>
                <p>
                  C-87 Phase 2, Extension, Gulshan e Hadeed, Bin Qasim, Karachi.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="info">
              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Daily Open:<br>
                  12:00PM to 2:00AM
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="info">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>clucksnbulls12@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="info">
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+92 3350334656</p>
              </div>
            </div>
          </div>
        </div>
        <div data-aos="fade-up">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506.6231467200546!2d67.3636909106089!3d24.868588394377582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb333c7b267f8ad%3A0xcddebff3c7d57fe2!2sClucks%20n%20Bulls!5e0!3m2!1sen!2s!4v1677961986668!5m2!1sen!2s" loading="lazy" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>CLUCKSNBULLS</h3>
              <p>
                <strong>Address:</strong> C-87 Phase 2, Extension<br>
                Gulshan e Hadeed, Bin Qasim, Karachi<br><br><br>
                <strong>Phone:</strong> +92 3350334656<br>
                <strong>Email:</strong> clucksnbulls12@gmail.com<br>
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Deals</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gallery</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us On</h4>
            <ul>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/people/Clucks-n-Bulls/100069890586735/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/clucksnbulls/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ClucksnBulls</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Carousel Modal -->
  <?php
  require_once("connection.php");
  // Retrieve images from the database
  $sql = "SELECT modal_images FROM modal";
  $result = mysqli_query($conn, $sql);
  $images = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // Close the database connection
  mysqli_close($conn);
  ?>
  <?php if (count($images) > 0) : ?>
    <div id="carouselModal" class="modal">
      <div class="modal-content">
        <span class="close-btn" id="closeBtn">&times;</span>
        <?php if (count($images) > 1) : ?>
          <span class="prev" id="prevBtn">&#10094;</span>
        <?php endif; ?>
        <?php foreach ($images as $image) : ?>
          <img class="carousel-slide" data-aos="fade" data-aos-delay="100" src="<?php echo $image['modal_images']; ?>" alt="Image">
        <?php endforeach; ?>
        <?php if (count($images) > 1) : ?>
          <span class="next" id="nextBtn">&#10095;</span>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/modal.js"></script>
</body>

</html>