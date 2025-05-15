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



    <!-- Header Section -->
    <section data-aos="fade-up" data-aos-delay="200">

        <?php //require_once('../includes/header/header-inc.php');  
        ?>
        <div class=" bg-light" style="min-height: 400px;">
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
   
    <div class="container">
      <h3 class="text-end text-dark mt-md-5">نماذج اعمالنا</h3>
        <div class="row mt-md-5">
        <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
          <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 5px;padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 30px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
        </div>
        <div class="row ">
        <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 5px;padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 30px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
          <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 5px;padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 30px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
        </div>
        <div class="row">
        <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 5px;padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 30px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
          <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 5px;padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 30px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
        </div>
        <div class="row">
          <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 5px;padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 30px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
          <div class="col mt-3 mb-3">
            <!-- required bootstrap js -->
           <!-- Carousel -->
 <div class="img-fluid">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel"
      style="margin-top: 5px;padding:0px;background-color:#000000FF;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>

      </div>
      <div class="carousel-inner">
        <div class="carousel-item   active" style="padding:0px 30px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">


        
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


         
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background1.jpg" class="img-fluid"
            alt="...">

        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background2.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              product one
            </h1>
            <h1 class="text-right text-success">
              Product two
            </h1>
          </div>
        </div>
        <div class="carousel-item " style="padding: 0px 0px 0px 0px ;">
          <img src="../images/backgrounds/background4.jpg" class="img-fluid"
            alt="...">


          <div class="carousel-caption d-none d-md-block" style="margin:0px  70px 0px 20px; padding-top:100px">
            <h1 class="text-right">
              Product three
            </h1>
            <h1 class="text-right text-success">
             Products four
            </h1>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
    </div>
  </div>
    <!-- Carousel End -->
          </div>
      </div>
        <div class="row text-center">
        <span class="text-center border border-2 border-rounded rounded-5" style="color: crimson;">رؤية المزيد</span>

        </div>
    </div>
   </section>
    <!-- Footer -->
  <footer class="bg-dark text-light">
    <div class="container">
      <div class="row pt-5">
         <div class="col-md-4">
          <h5 class="text-center">تواصل معنا</h5>
          <div class="social-links text-center mt-5">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
       
        <div class="col-md-4">
          <h5 class="text-center">الصفحات</h5>
          <ul class="list-unstyled text-center mt-5">
            <li><a class="text-white" href="about.php" style="text-decoration:none;">حول الموقع</a></li>
            <li><a class="text-white" href="contact.php" style="text-decoration:none;">التواصل</a></li>
            <li><a class="text-white" href="privacy.php" style="text-decoration:none;">خدماتنات</a></li>
            <li><a class="text-white" href="terms.php" style="text-decoration:none;">نماذج اعمالنا</a></li>
          </ul>
        </div>
         <div class="col-md-4">
          <h5 class="text-center">كود سودان</h5>
          <p class="text-center mt-5">موقع كود سودان هو موقع الكتروني متخصص في تصميم وبرمجة المواقع و المتاجر الالكترونية للافراد و الشركات</p>
        </div>       
        
      </div>
    </div>
  </footer>
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