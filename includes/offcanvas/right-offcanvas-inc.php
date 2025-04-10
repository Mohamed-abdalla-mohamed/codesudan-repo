
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="Id1"
    aria-labelledby="Enable both scrolling & backdrop" style="max-width: max-content;">
    <div class="offcanvas-header">
      <img class=" img-thumbnail img-responsive " src="../images/logos/IMG_3897.jpeg" width="50" height="50" alt="">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    </div>
    <div class="offcanvas-body text-end">    
      <div class="container-fluid bg-white text-end border d-flex justify-content-center mt-0 bg-dark">
        <ul class="list-group list-unstyled list-group-horizontal bg-dark d-flex justify-content-center mt-3 mb-1">
          <li class="nav-item dropdown m-1">
            <a class="nav-link nav-icon text-white " href="viewCart.php?lang=<?php echo currentLang(); ?>">
              <i class="fa fa-shopping-cart border border-1 border-white rounded-5 p-1 ">
                <span class="badge bg-danger badge-number ">
                  <?php echo $cart->total_items() > 0 ? $cart->total_items() : ""; ?>
                </span>
              </i>
            </a>
          </li>
          <li class="m-1">
            <span class><i
                class="fa fa-heart text-white pt-1 pb-1 pe-1 ps-1 border border-1 border-white rounded-5"></i></span>
          </li>
          <li class="dropdown m-1">
            <a class="nav-link nav-profile d-flex align-items-center " href="#" data-bs-toggle="dropdown">
              <span class=" dropdown-toggle ps-2">
                <i class="fa fa-language text-white pt-1 pb-1 pe-1 ps-1 border border-1 border-white rounded-5"></i>
              </span>
            </a>
            <!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile ">
              <li>
                <a class="dropdown-item d-flex align-items-center"
                  href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=english">
                  <i class="bi bi-gear"></i>
                  <span>English</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center"
                  href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=arabic">
                  <i class="bi bi-question-circle"></i>
                  <span>Arabic</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <li class="dropdown m-1">

            <a class="nav-link nav-profile d-flex align-items-center " href="#" data-bs-toggle="dropdown">
              <span class=" dropdown-toggle ps-2">
                <i class="fa fa-user text-white pt-1 pb-1 pe-1 ps-1 border border-1 border-white rounded-5"></i>
                <i class="text-white">
                  <?php echo !empty($_SESSION['userName']) ? $_SESSION['userName'] : ""; ?>
                </i>
              </span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile ">

              <li>
                <a class="dropdown-item d-flex align-items-center" href="../clients/settings.php">
                  <i class="bi bi-person"></i>
                  <h6>My Profile</h6>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="../clients/orders.php">
                  <i class="bi bi-gear"></i>
                  <span>My Orders</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="../accounts/singout.php?action=logout">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul>
      </div>
      <div class="container border ">
        <div class="row">
          <div class="col text-end  text-info">
            <p class="form-control btn btn-info mt-1"> <span class="text- text-white">
                <?php echo $data->websiteDivitions; ?>
              </span></p>
          </div>
        </div>
        <div class="row ">
          <ul class="list-group list-unstyled  d-flex justify-content-end mt-3 mb-1 ">
            <li class="m-1">
              <span class><a class="btn bt-link text-dark fw-bloder h3"
                  href="<?php echo $_SERVER['PHP_SELF']; ?>?lang=<?php echo currentLang(); ?>">
                  <?php echo ($data->home); ?>
                </a></span>
            </li>
            <li class="m-1">
              <span class><a class="btn bt-link text-dark fw-bloder"
                  href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=MakeupsPerfums&lang=<?php echo currentLang(); ?>">
                  <?php echo ($data->makeup); ?>/
                  <?php echo ($data->perfums); ?>
                </a></span>
            </li>
            <li class="m-1">
              <span class>
                <div class="dropdown pb-0 pt-1 mt-0">
                  <button class="form-control btn btn-dark bg-dark text-white pt-0 pb-1 dropdown-toggle" type="button"
                    id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo ($data->clothes); ?>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="triggerId">
                    <a class="dropdown-item active"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Dresses&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->dresses); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Tunics&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->tunics); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Abaya&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->abaya); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Coat&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->coat); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Blouse&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->blouses); ?>&
                      <?php echo ($data->shirts); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=ShawlsHijabs&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->hijabs); ?>&
                      <?php echo ($data->shawls); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Skirts&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->skirts); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Pants&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->pants); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=SportSwimming&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->sports); ?>&
                      <?php echo ($data->swimming); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=dressess&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->eveningDresses); ?>
                    </a>
                    <a class="dropdown-item"
                      href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=PijamasUnderwars&lang=<?php echo currentLang(); ?>">
                      <?php echo ($data->underware); ?>&
                      <?php echo ($data->pajamas); ?>
                    </a>

                  </div>
                </div>
              </span>
            </li>
            <li class="m-1">
              <span class>
                <div class="dropdown pb-0 pt-1 mt-0">
                  <button class="form-control btn btn-white bg-dark text-white pt-0 pb-1 dropdown-toggle" type="button"
                    id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo ($data->house); ?>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="triggerId">
                    <a class="dropdown-item active" href="#">
                      <?php echo ($data->kitchen); ?>
                    </a>
                    <a class="dropdown-item" href="index.php?curency=SAR">
                      <?php echo ($data->bedSheets); ?>
                    </a>
                    <a class="dropdown-item" href="index.php?curency=QAR">
                      <?php echo ($data->decor); ?>
                    </a>
                  </div>
                </div>
              </span>
            </li>
            <li class="m-1">
              <span class><a class="btn bt-link text-dark fw-bloder"
                  href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=BagsShoes&lang=<?php echo currentLang(); ?>">
                  <?php echo ($data->shoos); ?>/
                  <?php echo ($data->bags); ?>
                </a></span>
            </li>
            <li class="m-1">
              <span class><a class="btn bt-link text-dark fw-bloder"
                  href="<?php echo $_SERVER['PHP_SELF']; ?>?divition=Clothes&category=Kids&lang=<?php echo currentLang(); ?>">
                  <?php echo ($data->kids); ?>
                </a></span>
            </li>
          </ul>
        </div>

        <div class="container border">
          <div class="row">
            <div class="col text-end  text-info">
              <p class="form-control btn btn-info mt-1"> <span class="text- text-white">
                  <?php echo $data->contact; ?>
                </span></p>
            </div>
          </div>
          <div class="row">
            <div class="col text-end ">
              <span class="me-2"> <i class="text-dark me-3">
                </i>+1 (708) 632-6322</span>
              <span class="text-success me-3"> <i class="fa fa-phone">
                </i>
              </span>
            </div>
          </div>
          <div class="row pb-3">
            <div class="col text-end ">
              <span class="me-2"> <i class="text-dark me-3">
                </i>support@rozayt.com</span>
              <span class="text-danger me-3"> <i class="fa fa-envelope">
                </i>
              </span>
            </div>
          </div>
        </div>
        <div class="container border">
          <div class="row">
            <div class="col text-end  text-info">
              <p class="form-control btn btn-info mt-1"> <span class="text- text-white">
                  <?php echo $data->paymentMethods; ?>
                </span></p>
            </div>
          </div>
          <div class="row text-center">
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
        </div>
      </div>
      <div class=" offcanvas-footer mb-2">
        <div class="container">
          <div class="row text-center">
            <p class="text-center">
              <?php echo $data->rights; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>