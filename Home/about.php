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
    <script src="../Assets/js/jquery.3.6.7.js"></script>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="socialmediaicons.css">
</head>

<body class="" style="background-color: #1B1464;">

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

<div class="container bg-white pt-3 pb-3 mt-5 mb-5">
    <div class="container mt-2 mb-3">
        <div class="row">
          <div class="col text-center">
            <hr class="text-danger">
          </div>
          <div class="col col-3 text-center">
            <h2>خبراتنا</h2>
          </div>
          <div class="col text-center">
            <hr>
          </div>
        </div>
      </div>
    <div class="row mb-5">
        <div class="col">
           
          <!-- <h5 class="text-center text-dark">كود سودان</h5> -->
          <h3 class="text-right mt-3 text-dark" style="direction: rtl;">موقع كود سودان هو موقع الكتروني متخصص في تصميم وبرمجة
             المواقع و المتاجر الالكترونية للافراد و الشركات 
           ومواقع تقديم الخدمات والمواقع الشخصية للافراض لعرض خدماته وغيرها من المواقع المختلفة 
            
          </h3>
      
        </div>
    </div>
</div>

 <!-- Footer -->
  <?php
     require_once('../includes/footer/footer-inc.php');
 ?>
 <!-- End Footer Section-->
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="../Assets/js/jquery.3.6.7.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>

</html>