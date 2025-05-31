<!DOCTYPE html>
<html lang="en">

<head>

  <link href="../images/logo.png" rel="icon">
  <link href="../images\logo.png" rel="apple-touch-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="موقع كود سودان  هو موقع الكتروني متخصص في تصميم وبرمجة مواقع الانترنت  المتاجر الالكترونية للافراد و المؤسسات والشركات و المواقع الشخصية ">
   
  <meta name="keywords" content="كود سودان,تصميم,برمجة,تصميم موقع,برمجة المواقع,متاجر الكترونية,تصميم متجر الكتروني
,برمجة موقع الكتروني,مصمم مواقع,مبرمج مواقع,تصميم موقع شركة,تصميم موقع الكتروني">
  <title>الرئيسية-كود سودان</title>
  <?php
  require_once('../includes/head/head.php');
  ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="socialmediaicons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=El+Messiri:wght@400..700&family=Lateef:wght@200;300;400;500;600;700;800&family=Rakkas&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: "Amiri", serif;
      font-weight: 400;
      font-style: normal;
    }
  </style>

  <!-- <style>
    *{
      direction: rtl;
      font-family:sans-serif ;
    }
  </style> -->
</head>

<body class="" style="background-color: #1B1464;">

  <a href="https://wa.me/+249926611304" class="con d-flex align-items-center justify-content-center active">
    <i class="fa fa-whatsapp"></i></a>
  <!-- <a href="tel:+249961047266" class="con1 d-flex align-items-center justify-content-center active">
        <i class="fa fa-instagram"></i></a> -->
  <a href="https://wa.me/+249926611304" class="con1 d-flex align-items-center justify-content-center active">
    <img class="img-thumbnail rounded-circle" src="../images/fangIcons/whatsapp.png" width="50" height="50" alt="">
  </a>
  <a href="" class="con d-flex align-items-center justify-content-center active">
    <img class="img-thumbnail rounded-circle" src="../images/fangIcons/instgram.png" width="50" height="50" alt="">
  </a>
  <!-- Navigation -->
  <?php
     require_once('../includes/header/header-inc.php');
 ?>

  <section class=" mb-5" data-aos="fade-up" data-aos-delay="200">

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
 
  <section>
    <!--this is to add new comment-->

    <div class="container  mt-5 mb-5">
      <div class="container  bg-white mt-2 mb-5">
        <div class="row pt-2">
          <div class="col text-center">
            <hr class="text-danger">
          </div>
          <div class="col col-4 text-center">
            <h3>تواصل معنا</h3>
          </div>
          <div class="col text-center">
            <hr>
          </div>
        </div>
      </div>
      <form style="direction:rtl;" method="post" action="addArticle3.php" data-aos="fade-left" data-aos-delay="200">
        <input class="form-control" type="hidden" name="fileName" value="articles2.js">
        <input class="form-control" type="hidden" name="language" vlaue="php">
        <input class="form-control" type="hidden" name="lesson" value="lesson1">

        <input class="form-control border border-2 border-primary mt-2" type="text" name="userName"
          id="Name" placeholder="ادخل اسمك">
        <input class="form-control border border-2 border-primary mt-2" type="email" name="userEmail"
          id="Email" placeholder="بريدك الالكتروني">
        <div class="form-group mt-2">
          <textarea class="form-control border border-2 border-primary" name="userComment"
            id="Comment" rows="3" placeholder="اكتب الرسالة"></textarea>
          <textarea class="form-control" id="json" name="json" rows="3" hidden></textarea>
        </div>
        <button
          type="submit"
          class=" form-control btn btn-primary mt-3 pt-2 pb-2">
          ارسل الرسالة
        </button>

      </form>
    </div>
    <!--this is to add new comment-->
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