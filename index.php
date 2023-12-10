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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <!-- ======= Skills Section ======= -->
    <?php
      include 'component/skills.php';
    ?>
    <!-- End Skills Section -->

    <!-- ======= Counter Section ======= -->
    <?php
      include 'component/counter.php';
    ?>
    <!-- End Counter Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php
      include 'component/testimonials.php';
    ?>
    <!-- End Testimonials Section -->

    

    <!-- ======= projects Section ======= -->
    <?php
      include 'component/projects.php';
    ?>
    <!-- End projects Section -->

    <!-- ======= portfolio Section ======= -->
    <?php
      include 'component/portfolio.php';
    ?>
    <!-- End portfolio Section -->

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