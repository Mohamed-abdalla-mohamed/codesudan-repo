
  <!-- ======= Footer ======= -->
 
  <!-- Remove the container if you want to extend the Footer to full width. -->
  <div class="container-fluid mt-5 " style="background-color:#2498D3">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-between p-4 text-white" style="background-color:#2498D3">
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
        <!-- Right -->
        <div>
          <a href="" class="text-white d-inline-block me-2">
            <img class="img-thumbnail" src="../Images/img/fangIcons/facebook.png" width="30" height="30" alt="">

          </a>
          <a href="" class="text-white  d-inline-block me-2">
            <img class="img-thumbnail" src="../Images/img/fangIcons/instgram.png" width="30" height="30" alt="">
          </a>
          <a href="" class="text-white  d-inline-block me-2">
            <img class="img-thumbnail" src="../Images/img/fangIcons/whatsapp.png" width="30" height="30" alt="">
          </a>

        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">our policy</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <ul class="list-group list-unstyled">
                <li>
                  </i> <a href="../Policy/privacyPolicy.php?lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->privacyPolicy); ?>
                  </a>
                </li>
                <li>
                  </i>
                  <a href="../Policy/aboutUs.php?lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->about); ?>
                  </a>
                </li>
                <li>
                  </i>
                  <a href="../Policy/shipping.php?lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->shippingPolicy); ?>
                  </a>
                </li>
                <li>
                  </i>
                  <a href="../Policy/retrun.php?lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->return); ?>
                  </a>
                </li>
              </ul>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Products</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <ul class="list-group list-unstyled">
                <li></i><a href="index.php">
                    <?php echo ($data->clothes); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=BagsShoes&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->bags); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=MakeupsPerfums&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->perfums); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=accessors&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->accessors); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=decors&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->house); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Kids&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->kids); ?>
                  </a></li>

              </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Useful links</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <ul class="list-group list-unstyled">
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Dresses&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->dresses); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Abaya&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->abaya); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Blouse&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->hijabs); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Skirts&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->skirts); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Blouse&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->blouses); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Dresses&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->tunics); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=PijamasUnderwars&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->underware); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=PijamasUnderwars&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->pajamas); ?>
                  </a></li>
                <li></i> <a
                    href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=dressess&lang=<?php echo currentLang(); ?>">
                    <?php echo ($data->eveningDresses); ?>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><i class="fas fa-home mr-3"></i>United State,illinoy</p>
              <p><i class="fas fa-envelope mr-3 text-danger"></i>support@rozayt.com</p>
              <p><i class="fas fa-phone mr-3 text-success"></i> +1 (708) 632-6322</p>
              <!-- <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p> -->
            </div>
            <div class="row text-center">
              <p class="fw-bolder text-dark fw-bloder">our accepted payment methods</p>
              <ul class="list-group list-unstyled list-group-horizontal d-flex justify-content-center mt-1 mb-1">
                <li class="m-1">
                  <span class="m-1"><img class="img-thumbnail" src="../credit/mastercard.png" width="40" height="40"
                      alt=""></span>
                </li>
                <li class="m-1">
                  <span class="m-1"><img class="img-thumbnail" src="../credit/visa.png" width="45" height="45"
                      alt=""></span>
                </li>
                <li class="m-1">
                  <span class="m-1"><img class="img-thumbnail" src="../credit/Amex.png" width="40" height="40"
                      alt=""></span>
                </li>
                <li class="m-1">
                  <span class="m-1"><img class="img-thumbnail" src="../credit/paypal.png" width="35" height="35"
                      alt=""></span>
                </li>
              </ul>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        ©
        <?php echo ($data->rights) . "\t" . date("Y"); ?>
        Copyright:
        <a class="text-dark" href="https://rozayt.com/">rozayt.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->