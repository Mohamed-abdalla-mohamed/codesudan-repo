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
</head>

<body>

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
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="../images/logo.png" alt="ShopEase Logo" height="40">
        CODE SUDAN
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- <form class="d-flex mx-auto" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="q" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                </form> -->
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

  <!-- Hero Section -->
  <section class="hero-section mt-0" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
          <h1 class="display-4 fw-bold">Welcome to ShopEase</h1>
          <p class="lead">Discover amazing products at incredible prices.</p>
          <a href="#featured-products" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
          <img src="../../images/backgrounds/background3.jpg" alt="Shopping" class="img-fluid">
        </div>
      </div>
    </div>
  </section>





  <!-- Header Section -->
  <section data-aos="fade-up" data-aos-delay="200">

    <?php //require_once('../includes/header/header-inc.php');  
    ?>
    <div class=" bg-light" style="min-height: 400px;">
      <!-- <div class="row"> -->
      <!-- <div class="col"> -->

      <img
        src="../../images/backgrounds/background3.jpg"
        class="img-fluid"
        alt="image desc"
        width="100%" />
      <!-- </div> -->
      <!-- </div> -->
    </div>
  </section>
  <!-- End Header Section -->
  <!-- Header Section -->
  <section class="mt-5" data-aos="fade-up" data-aos-delay="100">
    <div class="container bg-white">
      <div class="row">
        <div class="col" data-aos="fade-right" data-aos-delay="150">
          <div class="card">
            <img src="" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <div class="text-warning">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <a href="#" class="btn btn-primary pull-right"></a>
            </div>
          </div>
        </div>
        <div class="col" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <img src="" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <div class="text-warning">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <a href="#" class="btn btn-primary pull-right"></a>
            </div>
          </div>
        </div>
        <div class="col" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <img src="" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <div class="text-warning">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <a href="#" class="btn btn-primary pull-right"></a>
            </div>
          </div>
        </div>
        <div class="col" data-aos="fade-left" data-aos-delay="300">
          <div class="card">
            <img src="" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <div class="text-warning">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>
              <a href="#" class="btn btn-primary pull-right"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header Section -->
  <!-- Header Section -->
  <section class="mt-5">
    <div class="container bg-white">
      <div class="row">
        <div class="col">
          <h1>Code Sudan Company</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header Section -->
  <section class="hero-section mt-0" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
          <h1 class="display-4 fw-bold">Welcome to ShopEase</h1>
          <p class="lead">تصاميم متجاوبة مع كل الشاشات</p>
          <a href="#featured-products" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
          <img src="../../images/backgrounds/background3.jpg" alt="Shopping" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="hero-section mt-0" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
          <h1 class="display-4 fw-bold">Welcome to ShopEase</h1>
          <p class="lead">تصاميم متجاوبة مع كل الشاشات</p>
          <a href="#featured-products" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
          <img src="../../images/backgrounds/background3.jpg" alt="Shopping" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="hero-section mt-0" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
          <h1 class="display-4 fw-bold">Welcome to ShopEase</h1>
          <p class="lead">تصاميم متجاوبة مع كل الشاشات</p>
          <a href="#featured-products" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
        <div class="col-md-6" data-aos="fade-left" data-aos-delay="400">
          <img src="../../images/backgrounds/background3.jpg" alt="Shopping" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5 mb-5 pt-5 pb-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-3 rounded rounded-5 mt-3 mb-3" data-aos="fade-left" data-aos-delay="150">
          <div class="card border border-rounded rounded rounded-3">
            <img src="../images/backgrounds/background1.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">
                we design responsive and beautiful designs for your buisness.
              </p>

              <a href="#" class="btn btn-primary pull-right">
                view more...
              </a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 rounded rounded-5 mt-3 mb-3" data-aos="fade-up" data-aos-delay="150">
          <div class="card border border-rounded rounded rounded-3">
            <img src="../images/backgrounds/background1.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">
                we design responsive and beautiful designs for your buisness.
              </p>

              <a href="#" class="btn btn-primary pull-right">
                view more...
              </a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 rounded rounded-5 mt-3 mb-3" data-aos="fade-up" data-aos-delay="150">
          <div class="card border border-rounded rounded rounded-3">
            <img src="../images/backgrounds/background1.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">
                we design responsive and beautiful designs for your buisness.
              </p>

              <a href="#" class="btn btn-primary pull-right">
                view more...
              </a>
            </div>
          </div>
        </div>
        <div class="col col-12 col-sm-3 rounded rounded-5 mt-3 mb-3" data-aos="fade-right" data-aos-delay="150">
          <div class="card border border-rounded rounded rounded-3">
            <img src="../images/backgrounds/background1.jpg" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">
                we design responsive and beautiful designs for your buisness.
              </p>

              <a href="#" class="btn btn-primary pull-right">
                view more...
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container rounded-5 bg-primary">
      <div class="row">
        <div class="col">
          <p>
            we are not just design your website we fulfill your dreams.
          </p>
        </div>
      </div>
    </div>
  </section>

<section>
   <!--this is to add new comment-->
   <div class="container  mt-5 mb-3">
                    <form method="post" action="addArticle3.php" data-aos="fade-left" data-aos-delay="200">
                        <input class="form-control" type="hidden" name="fileName" value="articles2.js">
                        <input class="form-control" type="hidden" name="language" vlaue="php">
                        <input class="form-control" type="hidden" name="lesson" value="lesson1">

                        <input class="form-control border border-2 border-primary m-2" type="text" name="userName"
                            id="Name" placeholder="ادخل اسمك">
                        <input class="form-control border border-2 border-primary m-2" type="email" name="userEmail"
                            id="Email" placeholder="بريدك الالكتروني">
                        <div class="form-group">
                            <textarea class="form-control border border-2 border-primary m-2" name="userComment"
                                id="Comment" rows="3" placeholder="اكتب الرسالة"></textarea>
                            <textarea class="form-control" id="json" name="json" rows="3" hidden></textarea>
                        </div>
                       
                    </form>
                </div>
                <!--this is to add new comment-->
</section>
  <!-- Footer -->
  <footer class="bg-dark text-light py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>About ShopEase</h5>
          <p>Your premium shopping destination for quality products and excellent service.</p>
        </div>
        <div class="col-md-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="terms.php">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Connect With Us</h5>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

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