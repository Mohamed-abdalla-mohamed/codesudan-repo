                <div class="container d-flex justify-content-center mt-0">

                 
                    <div class="container">
                        <div class="card-body ">

                            <div class="container">
                                <div class="d-flex justify-content-between">
                                    <div class="d-lg-flex align-items-center">
                                        <div class="text-success">
                                            <i class="fas fa-shopping-cart  fa-2x "></i>
                                            <!-- <p class=" mb-0">Cart</p> -->
                                        </div>
                                    </div>
                                    <div class="d-lg-flex align-items-center">
                                        <div class="text-success">
                                            <i class="fas fa-address-book fa-2x "></i>
                                            <!-- <p class=" mb-0">billing</p> -->
                                        </div>
                                    </div>
                                    <div class="d-lg-flex align-items-center">
                                        <div>
                                            <i class="fas fa-dollar fa-2x "></i>
                                            <!-- <p class=" mb-0">Payment</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul id="progressbar-1" class="mx-0 mt-0 mb-5 px-0 pt-0 pb-4">

                                <li class="step0 delivred" id="step1"><span style="margin-left: 22px; margin-top: 12px;">Cart</span>
                                </li>
                                <li class="step0 delivred text-center" id="step2"><span>Billing</span>
                                </li>
                                <li class="step0  text-muted text-end" id="step3"><span style="margin-right: 22px;">Payment</span>
                                </li>

                            </ul>

                        </div>
                    </div>
                  
                </div>
                <div class="container">

                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <?php require_once('checkoutPage-cart.php') ?>
                        </div>
                        <div class="col-md-8 order-md-1 border border-1 border-dark">
                            <?php require_once('checkoutPage-billing.php') ?>

                        </div>
                    </div>

                </div>

