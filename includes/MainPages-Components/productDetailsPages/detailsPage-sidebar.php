 <!-- thsi is the start of main body left side section-->

        <div class="container-fluid border">

            <div class="container pt-1 pb-1">
                <ul class="list-group list-unstyled d-flex justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <!-- <i class="bi bi-search"></i>-->
                            <span>
                                <input class="form-control border border-2 border-success" type="search" name="" placeholder="search" icon="fa fa-search">
                            </span>
                        </a><!-- End Notification Icon -->

                        <ul class="dropdown-menu dropdown-menu-center " style="width:100%;">
                            <li class="">
                                <div class="row text-center search-box ">
                                    <input type="text" autocomplete="off" class="btn btn-rounded" placeholder="search your request..." style="text-align:right; direction:rtl;" />
                                    <div class="result"></div>
                                </div>
                            </li>
                        </ul><!-- End Notification Dropdown Items -->
                    </li>
                </ul>
            </div>

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
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="clothes" value="clothesLink" aria-label="..." />

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
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="accessorsLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=Accessors&lang=<?php echo currentLang(); ?>" class="" id="accessorsLink" style="text-decoration:none">
                                    <?php echo ($data->accessors); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="makeupLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=makeupsperfums&category=makeup&lang=<?php echo currentLang(); ?>" class="" id="makeupLink" style="text-decoration:none">
                                    <?php echo ($data->makeup); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="perfumsLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=makeupsperfums&category=perfum&lang=<?php echo currentLang(); ?>" class="" id="perfumsLink" style="text-decoration:none">
                                    <?php echo ($data->perfums); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="shoesLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=bagsshoes&category=shoes&lang=<?php echo currentLang(); ?>" class="" id="shoesLink" style="text-decoration:none">
                                    <?php echo ($data->shoos); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="bagsLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=bagsshoes&category=bags&lang=<?php echo currentLang(); ?>" class="" id="bagsLink" style="text-decoration:none">
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
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="clothes" value="clothesLink" aria-label="..." />

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
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="accessorsLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=clothes&type=arabsFashions" class="" id="accessorsLink" style="text-decoration:none">
                                    <?php echo ($data->arabsFashions); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="makeupLink" />

                            </span>
                            <span class="">
                                <a href="index.php?type=personalCare" class="" id="makeupLink" style="text-decoration:none">
                                    <?php echo ($data->personalCare); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="perfumsLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=clothes&type=prides" class="" id="perfumsLink" style="text-decoration:none">
                                    <?php echo ($data->forPrides); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="shoesLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=clothes&type=boys" class="" id="shoesLink" style="text-decoration:none">
                                    <?php echo ($data->boys); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="bagsLink" />

                            </span>
                            <span class="">
                                <a href="index.php?divition=clothes&type=girls" class="" id="bagsLink" style="text-decoration:none">
                                    <?php echo ($data->girls); ?>
                                </a>
                            </span>
                        </li>
                        <li class="text-start ms-3">
                            <span>
                                <input class="form-check-input border border-1 border-dark" onclick="ch(this.value)" type="checkbox" name="radioNoLabel" id="" value="bagsLink" />

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
                                $divitions_array = array(
                                    1 => "makeup", 2 => "perfum", 3 => "shoes", 4 => "accessors", 5 => "bags",
                                    6 => "dressess", 7 => "kids", 8 => "decor", 9 => "kitchen", 10 => "bedsheets"
                                );
                                //$category_array = array(6 => "dressess", 7 => "kids", 8 => "decor", 9 => "kitchen", 10 => "bedsheets");

                                $divitions_array_length = count($divitions_array);
                                $random1 = rand(1, $divitions_array_length);
                                $random2 = rand(1, $divitions_array_length);
                                $random3 = rand(1, $divitions_array_length);
                                $random4 = rand(1, $divitions_array_length);

                                $clothesRes = $prod->products_limit_category($db, $divitions_array[$random1], 2);
                                $BagsRes = $prod->products_limit_category($db, $divitions_array[$random2], 2);
                                $perfumsRes = $prod->products_limit_category($db, $divitions_array[$random3], 2);
                                $accessorsRes = $prod->products_limit_category($db, $divitions_array[$random4], 2);

                                while ($clothes = $clothesRes->fetch_assoc()) {
                                    $proImg = !empty($clothes["image"]) ? '../' . $clothes["image"] : '../Images/img/islamicClothes/hijabs&shawls/hijabs&shawls (1).jpg';

                                ?>
                                    <div class="col-6">
                                        <div class="row mt-1">
                                            <div class="col col-12 col-lg-12">
                                                <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt="" width="60" height="60"></span>
                                            </div>
                                            <div class="col col-lg-12 text-center">
                                                <ul class="list-group list-unstyled ">

                                                    <li class="small ">
                                                        <?php echo $clothes['real_price']; ?>$
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
                                                <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt="" width="60" height="60"></span>
                                            </div>
                                            <div class="col col-lg-12 text-center">
                                                <ul class="list-group list-unstyled ">

                                                    <li class="small ">
                                                        <?php echo $bags['real_price']; ?>
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
                                                <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt="" width="60" height="60"></span>
                                            </div>
                                            <div class="col col-lg-12 text-center">
                                                <ul class="list-group list-unstyled ">

                                                    <li class="small ">
                                                        <?php echo $perfums['real_price']; ?>
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
                                                <img class="img-responsive border border-dark text-end" src="<?php echo $proImg; ?>" alt="" width="60" height="60"></span>
                                            </div>
                                            <div class="col col-lg-12 text-center">
                                                <ul class="list-group list-unstyled ">
                                                    <li class="small ">
                                                        <?php echo $accessors['real_price']; ?>
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
    
    <!-- thsi is the end of main body left section-->