 <!-- thsi is the start of main body right section-->

 <div class="col col-12 col-sm-12 col-md-9 col-lg-9">
        <div class="container bg-white text-center border d-flex justify-content-between mt-0">

          <ul class="list-group list-unstyled list-group-horizontal d-flex justify-content-center mt-1 mb-1">
          
            <li class="m-1">
              <span class="border bg-success text-white ps-2 pe-2 pt-1" data-bs-toggle="offcanvas" data-bs-target="#Id"
                aria-controls="Id"><i class="fa fa-list"></i></span>
            </li>
            <li class="m-1">
              <span class="border bg-white text-dark d-none d-sm-inline-block ps-2 pe-2">
                <?php echo ($data->show); ?> 1-8
              </span>
            </li>

          </ul>

          <ul class="list-group list-unstyled mt-1 ">
            <li class="m-0">

              <div class="dropdown ">
                <button class="form-control btn btn-white bg-success text-white pt-0 pb-1 dropdown-toggle" type="button"
                  id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo ($data->sort); ?>
                  <?php echo ($data->default); ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="triggerId">
                  <a class="dropdown-item"
                    href="<?php echo $_SERVER['PHP_SELF'] ?>?divition=<?php echo $_GET['divition'] ?>">
                    <?php echo ($data->sort); ?>
                    <?php echo ($data->default); ?>
                  </a>
                  <a class="dropdown-item"
                    href="<?php echo $_SERVER['PHP_SELF'] ?>?divition=<?php echo $_GET['divition'] ?>&real_price=10">less
                    than 10$</a>
                  <a class="dropdown-item"
                    href="<?php echo $_SERVER['PHP_SELF'] ?>?divition=<?php echo $_GET['divition'] ?>&real_price=50">less
                    than 50$</a>
                  <a class="dropdown-item"
                    href="<?php echo $_SERVER['PHP_SELF'] ?>?divition=<?php echo $_GET['divition'] ?>&real_price=70">less
                    than 70$</a>
                  <a class="dropdown-item"
                    href="<?php echo $_SERVER['PHP_SELF'] ?>?divition=<?php echo $_GET['divition'] ?>&real_price=100">less
                    than 100$</a>


                </div>
              </div>

            </li>
          </ul>

        </div>

        <!--#########################################l-->
        <div class="container-fluid bg-white   mt-2">
          <div class="row  d-flex justify-content-around">
            <?php if ($res->num_rows > 0) {
              // $div = $res->fetch_assoc();// this line is to get the divition name
              /*?>
                        <h4 class="text-center fw-bold mt-2 mb-2"><?php echo $div['divition']; ?></h4>
                        <?php
              */
              // $row = $res->fetch_assoc();
              while ($row = $res->fetch_assoc()) {
                $proImg = !empty($row["image"]) ? $row["image"] : '../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg';
                ?>

                <div class="col col-6 col-sm-6 col-md-4 col-lg-3 border rounded-3   rounded-3 p-3 mt-3 mb-3">
                  <div class="row text-center text-primary">
                    <span>
                      <a href="productDetails.php?product_id=<?php echo $row['id']; ?>&lang=<?php echo currentLang(); ?>">
                        <img class="img-fluid " src="<?php echo '../' . $row['image']; ?>" height="150"
                          style="min-height:200px;max-height:200px;">
                      </a>
                    </span>
                    <p class="text-center text-dark mt-0">
                      <?php echo $row["name"];
                      ?>
                    </p>
                    <p class="text-center text-danger mt-0">
                      <?php echo $row["real_price"] . "$";
                      ?>
                    </p>

                    <ul class="class  ">
                      <li class="list-group-item list-unstyled mt-0">
                        <h6 class=" btn btn-rounded btn-small text-light bg-success">

                          <a href="../cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>"
                            class=" text-white"><i class=" text-white fa fa-shopping-cart"></i>
                            <?php echo $data->addToCart; ?>
                          </a>

                        </h6>
                      </li>

                      <!--                       
                      <li class="list-group-item list-unstyled  ms-2 me-2 mt-2">
                        <span class="">
                          <i class="small text-dark fa fa-heart">
                            <a href="../cart/cartAction.php?action=addToCart&id=<?php //echo $row["id"]; 
                                ?>" class=" text-success"><?php echo $data->addToFavorit; ?> </a>

                          </i>
                        </span>
                      </li>
                     -->
                    </ul>
                    <!-- <ul class="class list-group list-group-horizontal  d-flex justify-content-center">
                      <li class=" list-unstyled  m-0">
                        <span class="">
                          <i class="fa fa-star text-warning  p-0 rounded-1"></i>
                        </span>
                      </li>
                      <li class=" list-unstyled  m-0">
                        <span class="">
                          <i class="fa fa-star text-warning  p-0 rounded-1"></i>
                        </span>
                      </li>
                      <li class=" list-unstyled  m-0">
                        <span class="">
                          <i class="fa fa-star text-warning  p-0 rounded-1"></i>
                        </span>
                      </li>
                      <li class=" list-unstyled  m-0">
                        <span class="">
                          <i class="fa fa-star text-warning  p-0 rounded-1"></i>
                        </span>
                      </li>
                      <li class=" list-unstyled  m-0">
                        <span class="">
                          <i class="fa fa-star text-warning  p-0 rounded-1"></i>
                        </span>
                      </li>
                    </ul> -->
                  </div>
                </div>
              <?php }
            } ?>
          </div>
        </div>
        <!--#########################################l-->


      </div>
      <!-- thsi is the end of main body right section-->