<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
  require_once('../includes/head/head.php');
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="socialmediaicons.css">
  <link rel="stylesheet" href="../Assets/bootstrap/css/bootstrap.css">
  <script src="../Assets/js/jquery.3.6.7.js"></script>
  <script src="../Assets/bootstrap/js/bootstrap.js"></script>

</head>

<body style="background-color: #1B1464;">

  <a href="https://wa.me/qr/3GOYYFHLHWESA1" class="con d-flex align-items-center justify-content-center active">
    <i class="fa fa-whatsapp"></i></a>
  <!-- <a href="tel:+249961047266" class="con1 d-flex align-items-center justify-content-center active">
        <i class="fa fa-instagram"></i></a> -->
  <a href="" class="con1 d-flex align-items-center justify-content-center active">
    <img class="img-thumbnail rounded-circle" src="../Images/fangIcons/whatsapp.png" width="50" height="50" alt="">
  </a>
  <a href="" class="con d-flex align-items-center justify-content-center active">
    <img class="img-thumbnail rounded-circle" src="../Images/fangIcons/instgram.png" width="50" height="50" alt="">
  </a>
  <!-- Navigation -->
  <?php
  require_once('../includes/header/header-inc.php');
  ?>



  <!-- Header Section -->
  <section data-aos="fade-up" data-aos-delay="200">

    <?php //require_once('../includes/header/header-inc.php');  
    ?>
    <div class=" bg-light" style="min-height: 300px;">
      <!-- <div class="row"> -->
      <!-- <div class="col"> -->

      <img
        src="../images/backgrounds/background4.jpg"
        class="img-fluid"
        alt="image desc"
        width="100%" />
      <!-- </div> -->
      <!-- </div> -->
    </div>
  </section>
  <!-- End Header Section -->

  <section>

    <div class="container text-dark mt-sm-1 mt-md-5">
      <div class="row">
        <div class="container  bg-white  mt-3 mb-5">
          <div class="row mt-3">
            <div class="col text-center">
              <hr class="text-danger">
            </div>
            <div class="col col-2 text-center text-dark">
              <h3> خدماتنا </h3>
            </div>
            <div class="col text-center ">
              <hr class="text-danger">
            </div>
          </div>
        </div>
        <ul
          class=" justify-content-center  "
          style="direction: rtl; list-style:none;">


          <li class="nav-item h6 mt-3">
            <span class="ms-3 text-danger"><i class="fa fa-arrow-left " aria-hidden="true">
              </i></span> <span class="text-white mt-2 mb-2 ">تصاميم متجاوبة مع كل الشاشات(التابليت - اللابتوب - الهاتف)</span>
          </li>

          <li class="nav-item h6 mt-3">
            <span class="ms-3 text-danger"><i class="fa fa-arrow-left " aria-hidden="true">

              </i></span> <span class="text-white mt-2 mb-2 "> جمع وتحليل متطلبات العميل جيدا قبل بدء العمل </span>
          </li>

          <li class="nav-item h6 mt-3">
            <span class="ms-3 text-danger"><i class="fa fa-arrow-left " aria-hidden="true">
              </i></span> <span class="text-white mt-2 mb-2"> سرعة التواصل و الرد على استفسارات العميل</span>
          </li>

          <li class="nav-item h6 mt-3">
            <span class="ms-3 text-danger"><i class="fa fa-arrow-left " aria-hidden="true">
              </i></span> <span class="text-white mt-2 mb-2 "> اسعار تناسب العملاء </span>
          </li>

          <li class="nav-item h6 mt-3">
            <span class="ms-3 text-danger"><i class="fa fa-arrow-left " aria-hidden="true">
              </i></span> <span class="text-white mt-2 mb-2 ">تسليم المشروع في الموعد المتفق عليه</span>
          </li>

          <li class="nav-item h6 mt-3">
            <span class="ms-3 text-danger"><i class="fa fa-arrow-left " aria-hidden="true">
              </i></span> <span class="text-white mt-2 mb-2 "> تقديم الدعم الفن للعميل مجانا بعد التسليم </span>
          </li>



        </ul>
      </div>
    </div>
  </section>
  </section>
  <!-- Footer -->
  <?php
  require_once('../includes/footer/footer-inc.php');
  ?>
  <!-- End Footer Section-->

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>

</html>