<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="Id"
    aria-labelledby="Enable both scrolling & backdrop" style="max-width: max-content;">
    <div class="offcanvas-header">
      <img class=" img-thumbnail img-responsive " src="../images/logos/IMG_3897.jpeg" width="50" height="50" alt="">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    </div>
    <div class="offcanvas-body text-start">
      <!-- <div class="container-fluid border bg-dark">
        <div class="row">
          <div class="col h4 text-end  text-info">
            <form method="post" action="">
              <div class="input-group">
                <input class="form-control mt-1 mb-1 border border-2 border-success rounded-2 " type="text" name=""
                  placeholder="ابحث الان عن طلبك" aria-label="Recipient's text">
              </div>
            </form>
          </div>
        </div>
      </div> -->
<!-- This is the Left SideBar -->
      <div class="row text-center">
        <form method="post" action="" class="form-control border">

          <ul class="list-group list-unstyled  d-flex justify-content-center border mt-1 mb-1">

            <li class="text-start  ms-3">
              <span class="fw-bolder text-success ">
                <?php echo ($data->categories); ?>
              </span>
            </li>

            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="clothes" value="clothesLink" aria-label="..." />

              </span>
              <span class="">
                <a href="index.php?divition=clothes&lang=<?php echo currentLang(); ?>" id="clothesLink">
                  <?php echo ($data->clothes); ?>
                </a>
              </span>
              <script>
                function ch(link) {
                  setTimeout(() => {
                    var button = document.getElementById(link);
                    button.click();
                  },
                    1000);
                }
              </script>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="accessorsLink" />

              </span>
              <span class="">
                <a href="index.php?divition=Accessors&lang=<?php echo currentLang(); ?>" class="" id="accessorsLink"
                  style="text-decoration:none">
                  <?php echo ($data->accessors); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="makeupLink" />

              </span>
              <span class="">
                <a href="index.php?divition=makeupsperfums&category=makeup&lang=<?php echo currentLang(); ?>" class=""
                  id="makeupLink" style="text-decoration:none">
                  <?php echo ($data->makeup); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="perfumsLink" />

              </span>
              <span class="">
                <a href="index.php?divition=makeupsperfums&category=perfum&lang=<?php echo currentLang(); ?>" class=""
                  id="perfumsLink" style="text-decoration:none">
                  <?php echo ($data->perfums); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="shoesLink" />

              </span>
              <span class="">
                <a href="index.php?divition=bagsshoes&category=shoes&lang=<?php echo currentLang(); ?>" class=""
                  id="shoesLink" style="text-decoration:none">
                  <?php echo ($data->shoos); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="bagsLink" />

              </span>
              <span class="">
                <a href="index.php?divition=bagsshoes&category=bags&lang=<?php echo currentLang(); ?>" class=""
                  id="bagsLink" style="text-decoration:none">
                  <?php echo ($data->bags); ?>
                </a>
              </span>
            </li>

          </ul>

          <ul class="list-group list-unstyled  d-flex justify-content-center border mt-1 mb-1">
            <li class="text-start  ms-3">
              <span class="fw-bolder text-success ">
                <?php echo ($data->otherClasses); ?>
              </span>
            </li>

            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="clothes" value="clothesLink" aria-label="..." />

              </span>
              <span class="">
                <a href="index.php?divition=clothes&type=newStyle" id="clothesLink">
                  <?php echo ($data->newStyles); ?>
                </a>
              </span>
              <script>
                function ch(link) {
                  setTimeout(() => {
                    var button = document.getElementById(link);
                    button.click();
                  },
                    1000);
                }
              </script>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="accessorsLink" />

              </span>
              <span class="">
                <a href="index.php?divition=clothes&type=arabsFashions" class="" id="accessorsLink"
                  style="text-decoration:none">
                  <?php echo ($data->arabsFashions); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="makeupLink" />

              </span>
              <span class="">
                <a href="index.php?type=personalCare" class="" id="makeupLink" style="text-decoration:none">
                  <?php echo ($data->personalCare); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="perfumsLink" />

              </span>
              <span class="">
                <a href="index.php?divition=clothes&type=prides" class="" id="perfumsLink" style="text-decoration:none">
                  <?php echo ($data->forPrides); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="shoesLink" />

              </span>
              <span class="">
                <a href="index.php?divition=clothes&type=boys" class="" id="shoesLink" style="text-decoration:none">
                  <?php echo ($data->boys); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="bagsLink" />

              </span>
              <span class="">
                <a href="index.php?divition=clothes&type=girls" class="" id="bagsLink" style="text-decoration:none">
                  <?php echo ($data->girls); ?>
                </a>
              </span>
            </li>
            <li class="text-start ms-3">
              <span>
                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox"
                  name="radioNoLabel" id="" value="bagsLink" />

              </span>
              <span class="">
                <a href="index.php?divition=clothes&type=babies" class="" id="bagsLink" style="text-decoration:none">
                  <?php echo ($data->baby); ?>
                </a>
              </span>
            </li>

          </ul>
          <ul class="list-group list-unstyled ">
            <li class="mt-2 mb-2">
              <div class="row">
                <?php
                $divitions_array = array(1 => "clothes", 2 => "bagsshoes", 3 => "makeupsperfums", 4 => "accessors", 5 => "house");
                $category_array = array(1 => "dressess", 2 => "kids", 3 => "decor", 4 => "kitchen", 5 => "bedsheets");

                $divitions_array_length = count($divitions_array);
                $random1 = rand(1, $divitions_array_length);
                $random2 = rand(1, $divitions_array_length);
                $random3 = rand(1, $divitions_array_length);
                $random4 = rand(1, $divitions_array_length);

                $clothesRes = $prod->products_limit_divition($db, $divitions_array[$random1], 2);
                $BagsRes = $prod->products_limit_divition($db, $divitions_array[$random2], 2);
                $perfumsRes = $prod->products_limit_divition($db, $divitions_array[$random3], 2);
                $accessorsRes = $prod->products_limit_divition($db, $divitions_array[$random4], 2);

                while ($clothes = $clothesRes->fetch_assoc()) {
                  $proImg = !empty($clothes["image"]) ? '../' . $clothes["image"] : '../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg';

                  ?>
                  <div class="col-6">
                    <div class="row mt-1">
                      <div class="col col-12 col-lg-12">
                      <a href="productDetails.php?product_id=<?php echo $clothes["id"];  ?>">

                        <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt=""
                          width="60" height="60">
                      </a>
                        </span>
                      </div>
                      <div class="col col-lg-12 text-center">
                        <ul class="list-group list-unstyled ">

                          <li class="small ">
                            <?php echo $clothes['real_price']."$"; ?>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>

                <?php } ?>
              </div>
            </li>
            <li class="mt-2 mb-2">
              <div class="row">
                <?php
                while ($bags = $BagsRes->fetch_assoc()) {
                  $proImg = !empty($bags["image"]) ? '../' . $bags["image"] : '../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg';
                  ?>
                  <div class="col-6">
                    <div class="row mt-1">
                      <div class="col col-12 col-lg-12">
                       <a href="productDetails.php?product_id=<?php echo $bags["id"];  ?>">
                       <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt=""
                          width="60" height="60">
                       </a>
                        </span>
                      </div>
                      <div class="col col-lg-12 text-center">
                        <ul class="list-group list-unstyled ">

                          <li class="small ">
                            <?php echo $bags['real_price']."$"; ?>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </li>
            <li class="mt-2 mb-2">
              <div class="row">
                <?php
                while ($perfums = $perfumsRes->fetch_assoc()) {
                  $proImg = !empty($perfums["image"]) ? '../' . $perfums["image"] : '../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg';
                  ?>

                  <div class="col-6">
                    <div class="row mt-1">
                      <div class="col col-12 col-lg-12">
                      <a href="productDetails.php?product_id=<?php echo $perfums["id"];  ?>">

                        <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt=""
                          width="60" height="60">
                </a>
              </span>
                      </div>
                      <div class="col col-lg-12 text-center">
                        <ul class="list-group list-unstyled ">

                          <li class="small ">
                            <?php echo $perfums['real_price']."$"; ?>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </li>
            <li class="mt-2 mb-2">
              <div class="row">
                <?php
                while ($accessors = $accessorsRes->fetch_assoc()) {
                  $proImg = !empty($accessors["image"]) ? '../' . $accessors["image"] : '../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg';
                  ?>

                  <div class="col-6">
                    <div class="row mt-1">
                      <div class="col col-12 col-lg-12">
                      <a href="productDetails.php?product_id=<?php echo $accessors["id"];  ?>">

                        <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt=""
                          width="60" height="60">
                      </a>
                        </span>
                      </div>
                      <div class="col col-lg-12 text-center">
                        <ul class="list-group list-unstyled ">
                          <li class="small ">
                            <?php echo $accessors['real_price']."$"; ?>
                          </li>


                        </ul>
                      </div>
                    </div>
                  </div>

                <?php } ?>
              </div>
            </li>
          </ul>
          </ul>
        </form>
      </div>
    </div>
  </div>