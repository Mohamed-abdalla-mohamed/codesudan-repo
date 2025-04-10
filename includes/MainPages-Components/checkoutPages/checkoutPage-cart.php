
<ul class="list-group mb-3" style="border: 2px solid #2498D3;">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?php echo ($data->productsPrice); ?></h6>
                                        <small class="text-muted"><?php echo ($data->allProductsPrice); ?></small>
                                    </div>
                                    <span class="text-muted"><?php echo   $cart->total() . CURRENCY_SYMBOL; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?php echo ($data->shipping); ?> </h6>
                                        <small class="text-muted"><?php echo ($data->delivery); ?></small>
                                    </div>
                                    <span class="text-muted"> <?php //echo ($data->free); 
                                                                ?></span>
                                    <!--here we set the shipping price based on selected state and country-->

                                    <span><span id="price"></span><strong>($)</strong></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?php echo ($data->tax); ?></h6>
                                        <small class="text-muted">AVT value</small>
                                    </div>
                                    <span class="text-muted"><?php echo (float)$setting->percentage_value(12, $cart->total());?>$</span>
                                </li>
                                <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0"><?php echo ($data->discount); ?></h6>
                                        <small>products discount</small>
                                    </div>
                                    <span class="text-success"><?php echo  "-" . '5' . CURRENCY_SYMBOL; ?></span>
                                </li> -->
                                <li class="list-group-item d-flex justify-content-between">
                                    <span><?php echo ($data->totalPrice); ?> (USD)</span>
                                    <strong id="visibleTotalPrice"></strong> <?php echo /*((float)$cart->total() + (float)percentage(12, $cart->total())) .*/ CURRENCY_SYMBOL; ?></strong>
                                    <input type="hidden" id="totalPrice" name="" value="<?php echo ((float)$cart->total() + (float)$setting->percentage(12, $cart->total())); ?>">
                                </li>
                            </ul>
                            <script>
                                setInterval(function() {
                                    var statePrice = document.getElementById("price").innerHTML;

                                    if (statePrice == "" /*||isNaN(statePrice)==TRUE*/ ) {
                                        statePrice = 0;
                                    } else {
                                        var totalPrice = document.getElementById("totalPrice").value;
                                        document.getElementById("visibleTotalPrice").innerHTML = (parseFloat(totalPrice) + Number(statePrice));
                                    }

                                }, 300);
                            </script>