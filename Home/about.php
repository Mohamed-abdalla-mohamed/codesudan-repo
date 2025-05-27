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
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="../images/logo.png" alt="ShopEase Logo" height="40">
        CODE SUDAN
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
     <p>
      <button
        class="btn btn-primary"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#contentId"
        aria-expanded="false"
        aria-controls="contentId"
      >
        Show
      </button>
     </p>
     <div class="collapse" id="contentId"></div>
     
      <div class="collapse navbar-collapse" id="navbarNav">
       
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="ourmodels.php"><i class="fas fa-user"></i> نماذج اعمالنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacts.php"><i class="fas fa-user"></i> التواصل</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="services.php"><i class="fas fa-user"></i> خدماتنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"><i class="fas fa-user"></i> حول</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <!-- <i class="fas fa-shopping-cart"></i> Cart
                            <span class="badge bg-primary cart-count">0</span> -->
              الرئيسية
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container mt-5 mb-5">
    <div class="row mt-5 mb-5">
        <div class="col">
           
          <h5 class="text-center text-white">كود سودان</h5>
          <p class="text-center mt-5 text-white">موقع كود سودان هو موقع الكتروني متخصص في تصميم وبرمجة المواقع و المتاجر الالكترونية للافراد و الشركات</p>
      
        </div>
    </div>
</div>

 <!-- Footer -->
  <footer class="bg-dark text-light fixed-bottom">
    <div class="container">
      <div class="row pt-5">
         <div class="col-md-4">
          <h5 class="text-center">كود سودان</h5>
          <p class="text-center mt-3 mb-5">موقع كود سودان هو موقع الكتروني متخصص في تصميم وبرمجة المواقع و المتاجر الالكترونية للافراد و الشركات</p>
        </div>       
        
       
       
        <div class="col-md-4">
          <h5 class="text-center">الصفحات</h5>
          <ul class="list-unstyled text-center mt-3 mb-5">
            <li><a class="text-white" href="about.php" style="text-decoration:none;">حول الموقع</a></li>
            <li><a class="text-white" href="contact.php" style="text-decoration:none;">التواصل</a></li>
            <li><a class="text-white" href="privacy.php" style="text-decoration:none;">خدماتنات</a></li>
            <li><a class="text-white" href="terms.php" style="text-decoration:none;">نماذج اعمالنا</a></li>
          </ul>
        </div>
          <div class="col-md-4">
          <h5 class="text-center">تواصل معنا</h5>
          <div class="social-links text-center mt-3 mb-5">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
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