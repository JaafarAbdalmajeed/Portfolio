<?php
  include 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
    include 'component/header.php';
  ?>
  <!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <?php
    include 'component/hero.php';
  ?>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php
      include 'component/about.php';
    ?>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <?php
      include 'component/services.php';
    ?>
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <?php
      include 'component/counter.php';
    ?>
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <?php
      include 'component/counter.php';
    ?>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php
      include 'component/testimonials.php';
    ?>
    <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <?php
      include 'component/blog.php';
    ?>
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <?php
      include 'component/contact.php';
    ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>