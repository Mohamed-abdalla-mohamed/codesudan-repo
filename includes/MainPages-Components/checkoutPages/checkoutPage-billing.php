<h4 class="mb-3 text-center"><?php //echo ($data->billingAddress); 
                                                            ?></h4>
                            <form class="needs-validation" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName"><?php echo ($data->firstName); ?></label>
                                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName"><?php echo ($data->lastName); ?></label>
                                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email"><?php echo ($data->email); ?> <span class="text-muted">(<?php echo ($data->required); ?>)</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="phone"><?php echo ($data->phone); ?></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">+1</span>
                                        </div>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="68786489" required>
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Your phone number is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password"><?php echo ($data->password); ?> <span class="text-muted">(<?php echo ($data->required); ?>)</span></label>

                                    <input type="password" id="form3Example4c" class="form-control" name="password" />

                                    <div class="invalid-feedback">
                                        Please enter a valid password.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="address"><?php echo ($data->address); ?><span>(<?php echo ($data->required); ?>)</span></label>
                                        <input type="text" class="form-control" id="address" name="address_one" placeholder="1234 Main St" required>
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                    <div class="col mb-3">
                                        <label for="address2"><?php echo ($data->addressTow); ?> <span class="text-muted">(<?php echo ($data->optional); ?>)</span></label>
                                        <input type="text" class="form-control" id="address2" name="address_tow" placeholder="Apartment or suite" required>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-6 col-md-5 mb-3">
                                        <label for="country"><?php echo ($data->country); ?></label>
                                        <select class="custom-select form-control d-block w-100 country" id="country" name="country" required>
                                            <option value="usa">Select country</option>
                                            <option value="usa">United States</option>
                                            <option value="canada">Canada</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-3">
                                        <!--Response will be inserted here-->
                                        <label for="city"><?php echo ($data->state); ?></label>
                                        <div>
                                            <select class="custom-select form-control d-block w-100 state" id="response2" name="state" required>
                                                <option value="usa" disabled>Select city</option>


                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-3 mb-3">

                                    </div>
                                </div>

                                <!-- <input class="form-control" type="hidden" name="PaymentMethod" value="Paypal"> -->

                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="credit" name="PaymentMethod" type="radio" class="custom-control-input" value="CreditCard" checked required>
                                        <label class="custom-control-label" for="credit">Credit card</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input id="Paypal" name="PaymentMethod" type="radio" class="custom-control-input" value="Paypal" required>
                                        <label class="custom-control-label" for="paypal">PayPal</label>
                                    </div>
                                </div>

                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block form-control mb-3" name="SubmitPaymentMethod" type="submit">Continue to checkout</button>
                            </form>