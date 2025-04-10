<div class="left-side-pro-detail p-0 m-0">
                                <div class="row">

                                    <div class="col-lg-12 text-end" style="margin:3px 0px 3px 0px; ">
                                        <?php
                                           if ($cart->total_items() > 0) {
                                               // Get cart items from session 
                                               $cartItems = $cart->contents();
                                               foreach ($cartItems as $item) {
                                                   $proImg = !empty($item["image"]) ? '../' . $item["image"] : 'empty image';
                                           ?>
                                                <div class="row justify-content-center align-items-center ">
                                                    <div class="col">
                                                        <button class="h6 btn btn-sm  " onclick="return confirm('Are you sure to remove cart item?')?window.location.href='../cart/cartAction.php?action=removeCartItem&id=<?php echo $item['rowid']; ?>':false;" title="Remove Item"><i class="fa fa-x btn  btn-rounded bg-danger h6 text-white"></i></button>
                                                    </div>
                                                    <div class="col"><span><?php echo ($data->total); ?>:</span>
                                                        <?php echo CURRENCY_SYMBOL . $item["subtotal"] . ' '; ?>


                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')" />
                                                    </div>

                                                    <div class="col">
                                                        <h6> <?php echo ""; // echo $item["name"]; 
                                                               ?>
                                                        </h6>
                                                        <p> <?php echo CURRENCY_SYMBOL . $item["price"] . ' '; ?>
                                                        </p>
                                                    </div>
                                                    <div class="col"><img class="border" src="<?php echo $proImg; ?>" alt="..." width="50" height="80">
                                                    </div>
                                                </div>

                                            <?php }
                                               ?>
                                            <div class="row mb-5">
                                                <div class="col-sm-12  text-center form-group" style="position:static; bottom:2px;">
                                                    <?php if ($cart->total_items() > 0) { ?>
                                                        <a href="checkout.php?lang=<?php echo $_SESSION['lang']; ?>" class="btn btn-block btn-dark form-control text-white mt-3"><?php echo ($data->orderContinue); ?><i class="iaright"></i></a>
                                                    <?php } else {
                                                           echo "sorry your cart is empty";
                                                       } ?>
                                                </div>
                                            </div>
                                        <?php
                                           } else { ?>

                                            <p class="text-center mt-5">there is no products in your cart</p>

                                        <?php } ?>
                                        <?php //if ($cart->total_items() > 0) { 
                                           ?>


                                    </div>


                                </div>
                            </div>