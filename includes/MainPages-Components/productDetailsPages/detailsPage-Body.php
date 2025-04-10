<!--#########################################l-->
<div class="container text-center mt-5">
            <div class="row text-center">
                <div class="col col-sm-12 col-md-12 col-lg-10 m-auto   text-center" style="margin:50px 0px 100px 0px;">
                    <!-- <h6 class="text-center fw-bolder form-control m-auto">Product Details</h6> -->
                    <div class="container text-center ">
                        <div class="row  bg-info text-center  " style="  margin-top:5px;">
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $proImg = !empty($row["image"]) ? '../' . $row["image"] : 'image not found';
                            ?>
                                    <div class="container text-center  bg-white">
                                        <div class="row m-0 text-center border">
                                            <div class="col col-12 col-sm-12 col-md-6  col-lg-6 border justify-content-center text-center">
                                                <img src="<?php echo $proImg; ?>" class=" " width="200" height="250" style="  position:sticky;top:20px;bottom:20px;">

                                            </div>
                                            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 border mt-5 mt-md-0">
                                                <div class=" ">
                                                    <div class="row">
                                                        <div class="col-lg-12 text-start mt-2 mb-1">
                                                            <p class="text-dark text-start ms-2 me-4 fw-bolder d-inline-block">Name:</p>
                                                            <p class=" h6 text-dark d-inline-block" style=" font-size:15px; font-weight:bold;">
                                                                <?php echo $row['name'] ?>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12 text-start mt-1">
                                                        <p class="text-dark text-start ms-2 me-4 fw-bolder d-inline-block">Price:</p>

                                                            <p class="m-0 p-0 price-pro text-center d-inline-block" style=" font-size:12px; font-weight:bold;">
                                                                <?php echo " ($)" . $row['real_price']; ?>
                                                            </p>

                                                            <!-- <hr class="p-0 m-0"> -->
                                                        </div>
                                                        <div class="col-lg-12  text-start mt-1">
                                                            <h6 class="text-start"> description</h6>
                                                            <span class="text-center">
                                                                <?php echo "this is the product description the descript the detail of the product." //$row['description']; 
                                                                ?>.
                                                            </span>
                                                            <!-- <hr class=""> -->
                                                        </div>
                                                        <div class="col-lg-12 mt-0">
                                                            <div class="row">
                                                                <div class="col mt-3 mb-2">
                                                                    <a href="../cart/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-dark w-100"><?php echo $data->addToCart; ?>
                                                                    </a>
                                                                </div>                                                                       
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin:100px 0px 0px 0px;">
                                            <div class="col-lg-12 text-center pt-3">
                                                <h4>prodcuts from the same category</h4>
                                            </div>
                                        </div>
                                      <!--#########################################################-->
                                      <div class="row mt-3 ">
                                            <?php
                                            $product_divition = $row['divition'];
                                            // Fetch the rmore Relative Prodcucts
                                            $sqlQ2 = "SELECT * FROM products Where divition = '$product_divition' LIMIT 8";
                                            $stmt2 = $db->prepare($sqlQ2);
                                            $stmt2->execute();
                                            $result2 = $stmt2->get_result();

                                            if ($result->num_rows > 0) {
                                                while ($row2 = $result2->fetch_assoc()) { ?>


                                                    <div class="col col-6 col-sm-6 col-md-4 col-lg-3 m-auto">
                                                        <div class="">
                                                            <a href="productDetails.php?product_id=<?php echo $row2['id']; ?>&lang=<?php echo currentLang(); ?>">
                                                                <img src="<?php echo '../' . $row2['image']; ?>" class="img-responsive" width="100" height="150" >
                                                            </a>
                                                        </div>
                                                        <div class="row text-center justify-content-center ">
                                                            <h6 class="text-dark">
                                                                <?php echo $row2["name"]; ?>
                                                            </h6>
                                                        </div>
                                                        <div class="row text-center justify-content-center product">
                                                            <div class="add-to-car justify-content-around" >
                                                                <button class="add-to-cart-btn btn btn-rounded bg-white">
                                                                    <a class="h6 text-danger">
                                                                        <?php echo '<span class=" text-dark" "></span>' . $row2['real_price'] . '<span class="" >$</span>'; ?>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row text-center justify-content-center m-auto" >
                                                            <h6 class="text-center btn btn-rounded text-light bg-dark" >
                                                                <a href="../cart/cartAction.php?action=addToCart&id=<?php echo $row2["id"]; ?>&lang=<?php echo currentLang(); ?>" class=" h6 text-white m-auto"><?php echo $data->addToCart; ?></a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                            <?php }
                                            } ?>
                                        </div>
                                      <!--#########################################################-->

                                    </div>
                            <?php }
                            } ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--#########################################l-->